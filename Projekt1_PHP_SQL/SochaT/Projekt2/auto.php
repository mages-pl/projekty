<!DOCTYPE html>
<html>

    <head>
        <title>Komis Samochodowy</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="auto.css">
    </head>
    <body>
        <div id="baner"><h1>Samochody</h1></div>
        <div id="panel_lewy"><h2>Wykaz samochodów</h2>
                   <?php
$polaczenie = mysqli_connect("localhost", "root", "", "komis");
	$zap1 = mysqli_query($polaczenie, "SELECT `id`, `marka`, `model` FROM samochody");

	while($row = mysqli_fetch_array($zap1)) {
		echo "<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
	}
	?>
        <h2>Zamówienia</h2>
            <?php
$polaczenie = mysqli_connect("localhost", "root", "", "komis");
	$zap1 = mysqli_query($polaczenie, "SELECT `Samochody_id`, `Klient` FROM zamowienia");

	while($row = mysqli_fetch_array($zap1)) {
		echo "<li>".$row['Samochody_id']." ".$row['Klient']." </li>";
	}
	?>
 </div>
        <div id="panel_prawy"><h2>Pełne dane:Fiat</h2>
                        <?php
$polaczenie = mysqli_connect("localhost", "root", "", "komis");
	$zap1 = mysqli_query($polaczenie, "SELECT * FROM samochody WHERE `marka`='Fiat'");

	while($row = mysqli_fetch_array($zap1)) {
		echo "".$row['id']."/ ".$row['marka']."/ ".$row['model']."/".$row['rocznik']."/ ".$row['kolor']."/".$row['stan']."/ "."<br>";
	}
	?>
 </div>
        <div id="stopka">
        <table>
            <tr><td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor:PESEL</td>
                <td><img src="auto.png" alt="komis samochodowy" /></td>
            </tr>
            </table></div>
    </body>
</html>
