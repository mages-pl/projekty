<!doctype html>

<html>

<head>
 
	<meta charset="utf-8"/>
	<title>Zadanie</title>
	
</head>
<body>

<?php
	
	
	
	///
	if((!empty($_POST["username"])) && (!empty($_POST["password"])))
	{   
       
		echo 'Logowanie';
			if((($_POST["username"]) =="admin") && (($_POST["password"]) =="admin"))
	  
{
                echo '<br>';
		$_SESION["zalogowany"]="1";
		setcookie("jakies_cookie"," cokolwiek");
		echo ' cookie:'.@$_COOKIE["jakies_cookie"];
}
	}

?>  

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
<input type="submit" value="Zaloguj">
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