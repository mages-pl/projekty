<!doctype html>
<html>
<head>
	<title>Potęgowanie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="baner">
		<a href="index.html"><img src="baner.jpg"></a>
	</div>
	<h1>POTĘGOWANIE</h1>
	<form method="post">
		<label><i>Podaj podstawę potęgi:</i></label>
		<input type="text" name="x" /><br/><br/>
		<label><i>Podaj dodatni, całkowity wykładnik potęgi:</i></label>
		<input type="text" name="y" /><br/><br/>
		<input type="submit" name="poteguj" value="POTĘGOWANIE"><br/><br/>
	</form>
	<div id="info"></div>
	<div id="wynik"></div>
	<?php
		ini_set("error_reporting", "off");
		if(isset($_POST["poteguj"])) {
			$x = $_POST['x'];
			$y = $_POST['y'];
			$z = pow($x, $y);

			if(!empty($x) && !empty($y)) {
				if($y<0) {
					echo "Wykładnik potęgi musi być dodatni";
				} else {
					if(isset($x)&&isset($y)) {
						echo "Wynik działania wynosi: <br/>podstawa potęgi: <b>".$x."</b>, wykładnik: <b>".$y."</b>, wynik potęgowania wynosi: <b>".$z."</b>";
						echo "<br/><b>".$x."<sup>".$y."</sup> = ".$z."</b>";
					}
				}
			} else {
				echo "<b>Wpisz podstawę i wykładnik potęgi</b>";
			}
		}
	?>
</body>
</html>