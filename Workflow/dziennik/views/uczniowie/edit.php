<?php

    require_once '../../controllers/UczniowieController.php';
    require_once '../../controllers/KlasyController.php';
    include '../main/header.php';
?>
<div class="container">
	<div class="row my-4">
		<h3>Edytuj ucznia</h3>
	</div>
	<?php
        foreach ((new UczniowieController())->editUczen($_GET['idUczen']) as $uczen) {
            //echo "<b>Imię</b>: ".$uczen['imie']; ?>
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>Imię</label>
				<input type="text" class="form-control" name="imie" value="<?php echo $uczen['imie']; ?>"/>
			</div>
			<div class="form-group">
				<label>Nazwisko</label>
				<input type="text" class="form-control" name="nazwisko" value="<?php echo $uczen['nazwisko']; ?>"/>
			</div>
			<div class="form-group">
				<label>Klasa</label>
				<select name="klasa_idKlasa" class="form-control" >
					<option value="" disabled>Wybierz</option>
					<?php
                        $pobierzKlasy = new Database();
            foreach ((new KlasyController())->index() as $klasa) {
                if ($klasa['idKlasa'] == $uczen['Klasa_idKlasa']) {
                    echo '<option selected value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
                } else {
                    echo '<option value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
                }
            } ?>
				</select>
			</div>
			<button name="edycjaUczniaSubmit" class="btn btn-success btn-sm px-4" title="Edytuj" data-toggle="tooltip" data-placement="bottom" type="submit">
				<span class="fa fa-check"></span>
			</button>
		</form>
	</div>
	<?php
        } ?>
</div>
<?php
    include '../main/footer.php';
?>