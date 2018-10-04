<!DOCTYPE html>
<html>

<head>
    
    <meta charset="UTF-8">
    <title>Przychodnia</title>
    
    <link rel="stylesheet" 
    href="przychodnia.css">

</head>

<body>
    
<div id="baner">
<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>    
</div>

<div id="panel_lewy">
<h3>LISTA PACJENTÓW</h3>   

<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'przychodnia');
        
         $zapytanie1 = mysqli_query($polaczenie, "SELECT `id`,`imie`,`nazwisko` FROM pacjenci");
            
            
        
         while($row = mysqli_fetch_array($zapytanie1)) {
		echo "".$row['id']." ".$row['imie']." ".$row['nazwisko']."</br>";
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

</div>

<div id="panel_prawy">
<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
<br>
<p>Brak wybranego pacjenta</p>

</div>

<div id="stopka">
<p>utworzone przez: Mój numer PESEL</p>  <a href="kwerendy.txt">"Pobierz plik z kwerendami"</a>  
</div>

</body>

</html>