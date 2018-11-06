<?php

    require_once '../../controllers/NauczycieleController.php';
    include '../main/header.php';
?>
<div class="container">
	<div class="row my-4">
		<h3>Edytuj nauczyciela</h3>
	</div>
	<?php
        foreach ((new NauczycieleController())->editNauczyciel($_GET['idNauczyciel']) as $nauczyciel) {
            ?>
	<div class="row">
		<form method="POST">
			<div class="form-group">
				<label>Imię</label>
				<input type="text" class="form-control" name="imie" value="<?php echo $nauczyciel['imie']; ?>"/>
			</div>
			<div class="form-group">
				<label>Nazwisko</label>
				<input type="text" class="form-control" name="nazwisko" value="<?php echo $nauczyciel['nazwisko']; ?>"/>
			</div>
			<div class="form-group">
				<label>Adres e-mail</label>
				<input type="email" class="form-control" name="email" value="<?php echo $nauczyciel['email']; ?>"/>
			</div>
			<button name="edycjaNauczycielaSubmit" class="btn btn-success btn-sm px-4" title="Edytuj" data-toggle="tooltip" data-placement="bottom" type="submit">
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