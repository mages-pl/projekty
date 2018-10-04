<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>PRZYCHODNIA</title>
    
<link rel="stylesheet" href="przychodnia.css">
    
</head>
    <body>
    
<div id="baner">
<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
</div>    
        
<div id="panel-lewy">
<h3>LISTA PACJENTÓW</h3> 

    <?php
    $polaczenie = mysqli_connect("localhost", "root", "", "przychodnia");
?>
 
<?php
    $zapytanie1 = mysqli_query($polaczenie, "SELECT `id`, `imie`, `nazwisko` FROM `pacjenci`");
    while($row = mysqli_fetch_array($zapytanie1)) {
        echo "<span>".$row['id']." ".$row['imie']." ".$row['nazwisko']."</span><br/>";
    }
?>
    
<br>
<br>    
    
<form action="pacjent.php" method="post">
<label>Podaj id:</label><br/>
<input type="number" name="id" id="id"/>
<button type="submit" name="pokaz">Pokaż dane</button>
</form>
<h3>LEKARZE</h3>
<ul>
<li>pn - śr
<ol>
<li>Anna Kwiatkowska</li>
<li>Jan Kowalewski</li>
</ol>
</li>
<li>czw - pt
<ol>
<li>Krzysztof Nowak</li>
</ol>
</li>
</ul>
</div>               
        
<div id="panel-prawy">
<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>  
<p>Brak wybranego pacjenta</p>    
</div>
        
<div id="stopka">   
utworzone przez: PATRYK

<br>   
<br>       

<table>
<tr>
<td>
<a href="kwerendy.txt">Pobierz plik z kwerendami</a>   
</td>  
</tr>
</table>    

</div>
        
</body>

</html>