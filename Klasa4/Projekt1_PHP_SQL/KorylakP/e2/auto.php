<!doctype html>
<?php
	$polaczenie = mysqli_connect("localhost", "root", "", "auta");
?>
<html>
<head>
 
	<meta charset="utf-8"/>
	<title>Samochody</title>
	<link rel="stylesheet" type="text/css" href="auto.css"/>
</head>
<body>
	<div class="strona">
		<div class="baner">
		<br>
			<h1>Samochody</h1>
		</div>
		<div class="panel_lewy">
			<h2>Wykaz samochodów</h2>
			<ul>
				<li> 1 Fiat punto</li>
				<li> 2 Fiat punto</li>
				<li> 3 Fiat punto</li>
				<li> 4 Opel corsa</li>
				<li> 5 Opel Astra</li>
				<li> 6 Toyota Corsa</li>
				<li> 7 Toyota Corsa</li>
				<li> 8 Toyota Yaris</li>
			</ul>
			<h2>Zamówienia</h2>
			<ul>
			    <li> 3 Anna Kowalska </li>
				<li> 6 Jan Nowakowski </li>
				<li> 8 Marcin Kolwal </li>
			</ul>
		</div>
		
		<div class="panel_prawy">
			<h2>Pełne Dane: Fiat</h2>
		<?php
			$zap3 = mysqli_query($polaczenie, "SELECT * FROM Samochody WHERE marka = 'Fiat' GROUP BY id ASC");
			
			while($row3 = mysqli_fetch_array($zap3)) {
				echo $row3['id']." / ".$row3['marka']. " / ".$row3['model']. " / ".$row3['rocznik']. " / ".$row3['kolor']. " / ".$row3['stan']. "<br/>";
			}
		?>
			
		</div>
		<div class="stopka">
			<table>
			<tr>
				<td><a href="kwerendy.txt">Kwerendy</a></td>
				<td>Autor: 00000000000</td>
				<td><img src="auto.png" alt="komis samochodowy"></td>
			</tr>
		</table>
		</div>


	</div>
</body>
</html>