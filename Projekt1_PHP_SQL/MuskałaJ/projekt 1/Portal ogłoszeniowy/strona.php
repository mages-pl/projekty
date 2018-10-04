<!DOCTYPE html>
<html>

    
    <head>
    
    <meta charset="UTF-8">
    <title> Portal Ogłoszeniowy</title>
    
    <link rel="stylesheet" href="styl1.css">
            
    </head>


<body>

<div id="baner">
   
<h1>Portal Ogłoszeniowy</h1>     
   
</div>
    
<div id="panel_lewy">
   
<h2>Kategorie ogłoszeń</h2>     

 <ol>
<li> Książki</li>  
<li> Muzyka</li>      
<li> Filmy</li>  
</ol>   

    
<image src="ksiazki.jpg" height="300px" width=:"200px"
alt="„Kupię/sprzedam książkę""> </image>   
    

<table>
<tr>
	<td>Liczba ogłoszń</td>	<td>Cena ogłoszenia</td> <td> Bonus</td>
</tr>

<tr>
	<td>1 - 10</td>	<td>1 PLN</td>  <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie </td>
</tr>

<tr>
	<td>11 - 50 </td>	<td>0,80 PLN</td>  
</tr>

<tr>
	<td>51 i więcej</td>	<td>0,60 PLN</td>  
</tr>
                  
</table>                              


</div>
    
<div id="panel_prawy">
   
<h2>Ogłoszenia kategorii książki</h2>     
   
<?php
				$polaczenie = mysqli_connect('localhost', 'root', '', 'ogloszenia');
				$zapytanie1 = mysqli_query($polaczenie, "SELECT ogloszenie.id, ogloszenie.uzytkownik_id, ogloszenie.tytul, ogloszenie.tresc
				FROM ogloszenie
				WHERE ogloszenie.kategoria = 1");
				$zapytanie2 = mysqli_query($polaczenie, "SELECT uzytkownik.id, uzytkownik.telefon FROM uzytkownik");
				
				while($rw = mysqli_fetch_row($zapytanie2)) {
					$tab[$rw[0]] = $rw[1];
				}

				while($row = mysqli_fetch_row($zapytanie1)) {
					echo'<h3>'.$row[0].' '.$row[2].'</h3><p>'.$row[3].'</p>';

					if(isset($tab[$row[1]])){
						echo'<p>telefon kontatkowy: '.$tab[$row[1]].'</p>';
					}

				}
				
				mysqli_close($polaczenie);
			?>


</div>    
    
    
<div id="stopka">
   
<p>Portal ogłoszeniowy opracował: Mój numer PESEL</p>     
   
</div>    
    
</body>

</html>