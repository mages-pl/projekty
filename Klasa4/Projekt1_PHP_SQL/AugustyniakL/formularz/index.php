<?php include "header.php"; ?>
<style>.bg-light{background-color: #f8f9faa3 !important;}
.form-control{background-color: #ffffff94 !important;}
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center card bg-light py-4 mt-5 mb-4">
			<form id="logowanie" method="post">
				<h3 class="card-subtitle text-muted mb-3">Formularz logowania</h3>
				<div class="form-group">
					<label for="login">Nazwa użytkownika</label>
					<input type="text" class="form-control w-50 mx-auto" id="login" name="login">
				</div>
				<div class="form-group">
					<label for="haslo">Hasło</label>
					<input type="password" class="form-control w-50 mx-auto" id="haslo" name="haslo">
				</div>
				<button type="submit" class="btn btn-success zaloguj">Zaloguj</button>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<h4 class="mt-4 text-center">
<?php
	ini_set("error_reporting", "Off");
	setcookie("ciastko", "<span class=\"text-white\">ZALOGOWANO POPRAWNIE</span>", time()+3600);
	session_start();
	if($_POST['login'] == 'test' && $_POST['haslo'] == 'test') {
		$_SESSION['sesja'] = '1';
		echo $_COOKIE['ciastko'];
		echo "
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add('bg-success');
		});
		</script>";
	} else if(empty($_POST['login']) && empty($_POST['haslo'])) {
		echo "<span class=\"text-white\">LOGIN I HASŁO JEST WYMAGANE</span>";
		echo "
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add('bg-info');
		});
		</script>";
	} else {
		echo "<span class=\"text-white\">NIEPOPRAWNY LOGIN LUB HASŁO</span>";
		echo "
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add('bg-danger');
		});
		</script>";
	}
?>
</h4>
<?php include "footer.php"; ?>