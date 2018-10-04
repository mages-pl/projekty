<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title> Portal ogłoszeniowy</title>

<link rel="stylesheet" href="styl1.css">
    
</head>
    <body>
    
<div id="baner">
<h1>Portal ogłoszeniowy</h1>
        </div>    
        
<div id="panel-lewy">
<h2>Katergorie  ogłoszeń</h2>
<ol>
    <li>Ksiązki</li>
    <li>Muzyka</li>
    <li>Filmy</li>
    </ol>
    
<img src="1.jpg" alt="Kupię/sprzedam książkę">

    
<table>
<tr>
<td>Lista ogłoszeń</td>	
<td>Cena ogłoszenia</td>
<td>Bonus</td>
</tr>
<tr>
<td>1-10</td>
<td>1 PLN</td>
<td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłosznie</td>
</tr>
<tr>
<td>11-50</td>	
<td>0,80 PLN</td> 
</tr>    
<tr>
<td>51 i więcej</td>	
<td>0,60 PLN</td> 
</table>    
    
<ol></ol>
        </div>
        
    <div id="panel-prawy">
      <center><h2>Ogłoszenia kategorii książki</h2></center>  
        
             <?php
				$polaczenie = mysqli_connect('localhost', 'root', '', 'oglosznia');
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
     Portal ogłoszeniowy opracował: PATRYK
        </div> 

    
</html>