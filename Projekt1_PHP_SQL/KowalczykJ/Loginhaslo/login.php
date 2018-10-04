<!doctype html>
<?php
	$polaczenie = mysqli_connect("localhost", "root", "", "przychodnia");
	
	
	///
	if((!empty($_POST["username"])) && (!empty($_POST["password"])))
	{
		echo 'ok';
			if((($_POST["username"]) =="admin") && (($_POST["password"]) =="admin"))
	{
		$_SESION["zalogowany"]="1";
		setcookie("jakies_cookie","cokolwiek");
		echo 'cookie:'.@$_COOKIE["jakies_cookie"];
	}
	}

?>
<html>
<head>
 
	<meta charset="utf-8"/>
	<title>zadania</title>
	<link rel="stylesheet" type="text/css" href="lekarze.css"/>
</head>
<body>

			<div id="panel">
			<?php
			if (@$_SESION["zalogowany"]!="1")
			{
				?>
<form method="post">
<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="username">
<br><label for="password">Hasło:        </label>
<input type="password" id="password" name="password">
<input type="submit" value="Login">
<p><a href="#">Zapomniałeś hasła?</a></p>
<div id="lower">
<input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
</div>
</form>
<?php
			}
			?>

		</div>

</body>
</html>