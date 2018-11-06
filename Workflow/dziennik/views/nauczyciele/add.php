<?php

require_once '../../controllers/NauczycieleController.php';
include '../main/header.php';
?>
<div class="container">
	<div class="row my-4">
		<h3>Dodaj nauczyciela</h3>
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
				<label>Adres e-mail</label>
				<input type="email" class="form-control" name="email" value="<?php echo $nauczyciel['email']; ?>"/>
			</div>
			<button name="dodajNauczycielaSubmit" class="btn btn-outline-success btn-sm px-4" title="Prześlij" data-toggle="tooltip" data-placement="bottom" type="submit">
				<span class="fa fa-check"></span>
			</button>
		</form>
	</div>
</div>
<?php include '../main/footer.php'; ?>