<!doctype html>
<html>
	<head>
		<title>Silnia</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="silnia.css"/>
	</head>
	<body>
		<h1>SILNIA</h1>
		<label>Podaj liczbę:</label>
		<form name="silnia">
			<input type="number" name="n"/>
			<input type="button" onclick="obl();" value="Oblicz"/>
			<input type="text" size="5" disabled name="wynik"/>
		</form>
		<div id="wynik"></div>
		<script type="text/javascript" src="silnia.js"></script>
		<div id="divek"></div>
	</body>
</html>