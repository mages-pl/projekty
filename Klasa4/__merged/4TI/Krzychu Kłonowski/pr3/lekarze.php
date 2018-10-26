<!doctype html>

<html>
<head>
 <?php
 $polacz=mysqli_connect("localhost","root","","przychodnia"
);
$zapytanie=mysqli_query($polacz,"SELECT * FROM pacjenci WHERE choroby = 'cos'");
 ?>
	<meta charset="utf-8"/>
	<title>zadania</title>
	<link rel="stylesheet" type="text/css" href="lekarze.css"/>
</head>
<body>
	<div class="strona">
		<div class="baner">
		<br>
			<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
		</div>
		<div class="panel_lewy">
			<h2>LISTA PACJENTÓW</h2>
			<ol>
				<li> Anna Kowalska</li>
				<li> Jan Kowalski</li>
				<li> Jan Nowak</li>
				<li> Katarzyna Nowak</li>

			</ol>
			
			
			<p>Podaj id:</p>
			
			<tr>
			<td><input type="text" name="id" /></td><td><input type="submit" value="Pokaż dane" /></td>
			</tr>
			
			<h2>Lekarze</h2>
			<ul>
			    <li> po-śr </li>
			</ul>
			<ol>
			    <li>Anna Kwiatkowska </li>
				<li>Jan Kowalewski </li>
			</ol>
			<ul>
			    <li> czw - pt </li>
			</ul>
			<ol>
			    <li>Krzysztof Nowak </li>
			</ol>
		</div>
		
		
		<div class="panel_prawy">
			<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
<br>
			
<div id="panel">

<form>
<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="username">
<label for="password">Hasło:</label>
<p><a href="#">Zapomniałeś hasła?</a></p>
<input type="password" id="password" name="password">
<div id="lower">
<input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
<input type="submit" value="Login">
</div>
</form>
<?php
while ($rezultat=mysqli_fetch_array($zapytanie)){
echo "<br>";
echo $rezultat["id"]; 
echo "<br>";
echo $rezultat["imie"]; 
echo "<br>";
echo $rezultat["choroby"]; 
echo "<br>";
echo $rezultat["uczelnia"]; 


}	
?>
</div>

		</div>

		<div class="stopka">
              <p>utworzone przez: 00000000000</p>
			  <u><a harf="nic">Pobierz plik z kwerendy</a></u>
              			  
		</div>


	</div>
</body>
</html>