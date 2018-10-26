<!doctype html>
<html>
<head>
 
	<meta charset="utf-8"/>
	<title>AUTKA</title>
	<link rel="stylesheet" type="text/css" href="komisek.css"/>
</head>
<body>
	<div class="strona">
		<div class="baner">
		<br>
			<h1>Samochody</h1>
		</div>
		<div class="panel_lewy">
			<h2>SPIS AUT</h2>
			<ul>
				<li> 1 toyota</li>
				<li> 2 bmw</li>
				<li> 3 audi</li>
				<li> 4 Opel corsa</li>
				<li> 5 mercedes</li>
				<li> 6 cherysler</li>
				<li> 7 peugeot</li>
				<li> 8 skoda fabia </li>
			</ul>
			<h2>Zamówienia</h2>
			<ul>
			    <li> 3 hezu </li>
				<li> 6 kanapa </li>
				<li> 8 iwo </li>
			</ul>
		</div>
		
		<div class="panel_prawy">
			<h2>DANE:</h2>
	<?php
				$polaczenie = mysqli_connect('localhost', 'root', '', 'auta');
				$zapytanie1 = mysqli_query($polaczenie, "SELECT * FROM samochody order by  rocznik");
				
				//$zapytanie2 = mysqli_query($polaczenie, "SELECT uzytkownik.id, uzytkownik.telefon FROM uzytkownik");
				
				while($rw = mysqli_fetch_array($zapytanie1)) {
				echo 	$rw["rocznik"]."<br>";
				}

				/*while($row = mysqli_fetch_row($zapytanie1)) {
					echo'<h3>'.$row[0].' '.$row[2].'</h3><p>'.$row[3].'</p>';

					if(isset($tab[$row[1]])){
						echo'<p>telefon kontatkowy: '.$tab[$row[1]].'</p>';
					}

				}
				*/
				
				//mysqli_close($polaczenie);
			?>

	</div>
			
		</div>
		<div class="stopka">
			<table>
			<tr>
				<td><a href="kwerendy.txt">Kwerendy</a></td>
				<td>Autor: 00000000000</td>
				<td><img src="komis.jpg" alt="komis samochodowy"></td>
			</tr>
		</table>
		</div>

</body>
</html>