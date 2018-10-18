<!doctype html>
<html>
<head>
	<title>Rejestracja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<h1>Rejestracja</h1>
	<form method="post" name="rejestracja">
		<input type="text" name="login" placeholder="Login">
		<input type="email" name="mail" placeholder="E-mail">
		<input type="password" name="haslo" placeholder="Hasło">
		<input type="password" name="haslo_repeat" placeholder="Powtórz hasło">
		<label><input type="checkbox" name="regulamin">Akceptuję regulamin</label>
		<button type="submit" name="ok"><span class="fa fa-user"></span> Zarejestruj</button>
		<div class="warning" style="display:none"></div>
	</form>
	<?php
		ini_set("error_reporting", "Off");
		$login = $_POST['login'];
		$mail = $_POST['mail'];
		$haslo = $_POST['haslo'];
		$regulamin = $_POST['regulamin'];

		
	?>
	<script src="sprawdz.js"></script>
</body>
</html>