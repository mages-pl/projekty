<!doctype html>
<html>
<head>
 
   <?php          $polaczenie=mysqli_connect("localhost","root","","bazaborza");   
                   $query=mysqli_query($polaczenie,"SELECT `id`, `tytul`, `tresc` FROM `ogloszenie` WHERE kategoria = 1");
  
  
  
  
  
 
  
  
  
 
  
  ?>
   
   
   
   
   
   
	<meta charset="utf-8"/>
	<title>Portal ogłoszeniowy</title>
	<link rel="stylesheet" type="text/css" href="styl1.css"/>
</head>
<body>
	<div class="strona">
		<div class="baner">
			<h1>Portal Ogłoszeniowy</h1>
		</div>
		<div class="panel_lewy">
			<h2>Kategorie ogłoszeń</h2>
			<ol>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Filmy</li>
			</ol>
			<img src="zdjecie.jpg" alt="Kupię / sprzedam książkę"/>
			<table>
				<tr>
					<td>Liczba ogłoszeń</td>
					<td>Cena ogłoszenia</td>
					<td id="kolumna3">Bonus</td>
				</tr>
				<tr>
					<td>1 - 10</td>
					<td>1 PLN</td>
					<td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
				</tr>
				<tr>
					<td>11 - 50</td>
					<td>0,80 PLN</td>
				</tr>
				<tr>
					<td>51 i więcej</td>
					<td>0,60 PLN</td>
				</tr>
			</table>
		</div>
		
		<div class="panel_prawy">
			<h2>Ogłoszenia kategorii książki</h2>
<?php
            while($result=mysqli_fetch_array($query))
            {
                echo $result['id'].'<br>';		echo $result['tytul'].'<br>';  echo $result['tresc'].'<br>';
			
            }
			
			
            ?>
			
		</div>
		<div class="stopka">
		<p>Treść</p>
		</div>


	</div>
</body>
</html>