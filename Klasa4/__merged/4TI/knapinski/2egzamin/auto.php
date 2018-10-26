<?php
	$polaczenie = mysqli_connect("localhost", "root", "", "komis");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Komis Samochodowy</title>
	<link rel="stylesheet" type="text/css" href="auto.css"/>
</head>
<body>
	<div class="baner">
		<h1>Lista Pacjentów</h1>
	</div>

	<div class="panel_lewy">
		<h2>Lista pacjętów</h2>
		<ul>
			<?php
				$zap1 = mysqli_query($polaczenie, "SELECT `id`, `marka`, `model` FROM Samochody GROUP BY id ASC");
				
				while($row = mysqli_fetch_array($zap1)) {
					echo "<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
				}
			?>
		</ul>
		<h2>Zamówienia</h2>
		<ul>
		<?php
			$zap2 = mysqli_query($polaczenie, "SELECT `samochody_id`, `Klient` FROM Zamowienia");
			
			while($row2 = mysqli_fetch_array($zap2)) {
				echo "<li>".$row2['samochody_id']." ".$row2['Klient']."</li>";
			}
		?>
		</ul>
	</div>

	<div class="panel_prawy">
		<h2>Pełne dane: Fiat</h2>
		<?php
			$zap3 = mysqli_query($polaczenie, "SELECT * FROM Samochody WHERE marka = 'Fiat' GROUP BY id ASC");
			
			while($row3 = mysqli_fetch_array($zap3)) {
				echo $row3['id']." / ".$row3['marka']. " / ".$row3['model']. " / ".$row3['rocznik']. " / ".$row3['kolor']. " / ".$row3['stan']. "<br/>";
			}
		?>
		<?php
			$zap4 = mysqli_query($polaczenie, "SELECT * FROM `zamowienia` left join samochody on samochody.id=zamowienia.Samochody_id");
			echo "<h1>test</h1>";
			while($row4 = mysqli_fetch_array($zap4)) {
				
				echo $row4['id']." / ".$row4['marka']. " / ".$row4['model']. " / ".$row4['rocznik']. " / ".$row4['kolor']. " / ".$row4['stan']. "<br/>";
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
</body>
</html>