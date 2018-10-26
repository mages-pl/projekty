<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>Komis samochodowy</title>
    
<link rel="stylesheet" href="auto.css">
    
</head>
    <body>
    
<div id="baner">
<h1>SAMOCHODY</h1>
        </div>    
        
<div id="panel-lewy">
<h2>Wykaz samochodów</h2>

 <?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'komis');
    $zap1 = mysqli_query($polaczenie, "SELECT `id`, `marka`, `model` FROM Samochody");

	while($row = mysqli_fetch_array($zap1)) {
		echo "<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
	}
	?>
    
    <h2>Zamówienia</h2>
      
    <?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'komis');
    $zap1 = mysqli_query($polaczenie, "SELECT `Samochody_id`, `Klient` FROM zamowienia");

	while($row = mysqli_fetch_array($zap1)) {
		echo "<li>".$row['Samochody_id']." ".$row['Klient']."</li>";
	}
	?>
    </div>
   
        
    <div id="panel-prawy">
 <h2>Pełne dane: FIAT</h2>  
		<?php
			$zap3 = mysqli_query($polaczenie, "SELECT * FROM Samochody WHERE marka = 'Fiat' GROUP BY id ASC");
			
			while($row3 = mysqli_fetch_array($zap3)) {
				echo $row3['id']." / ".$row3['marka']. " / ".$row3['model']. " / ".$row3['rocznik']. " / ".$row3['kolor']. " / ".$row3['stan']. "<br/>";
			}
		?>
	</div>    
   
        
        </div>
        
    <div id="stopka">   
   <table>
        <tr>
       <td>
        <a href="kwerendy.txt">Kwerendy</a>   
            </td>
       <td>Autor:PATRYK</td>
        <td><img src="auto.png" alt="komis samochodowy"</td>    
       </tr>
        </table>
        </div> 

    
</html>    