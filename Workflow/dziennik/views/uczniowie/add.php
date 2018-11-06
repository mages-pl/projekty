<?php
require_once '../../controllers/UczniowieController.php';
require_once '../../controllers/KlasyController.php';
include '../main/header.php';
?>
<div class="container">
	<div class="row my-4">
		<h3>Dodaj ucznia</h3>
	</div>
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>Imię</label>
				<input type="text" class="form-control" name="imie"/>
			</div>
			<div class="form-group">
				<label>Nazwisko</label>
				<input type="text" class="form-control" name="nazwisko"/>
			</div>
			<div class="form-group">
				<label>Klasa</label>
				<select name="klasa_idKlasa" class="form-control">
				<option value="" disabled selected>Wybierz</option>
				<?php
                $pobierzKlasy = new Database();
                foreach ((new KlasyController())->index() as $klasa) {
                    echo '<option value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
                }
                ?>
				</select>
			</div>
			<button name="dodajUczniaSubmit" class="btn btn-outline-success btn-sm px-4" title="Prześlij" data-toggle="tooltip" data-placement="bottom" type="submit">
				<span class="fa fa-check"></span>
			</button>
		</form>
	</div>
</div>
<?php include '../main/footer.php'; ?>