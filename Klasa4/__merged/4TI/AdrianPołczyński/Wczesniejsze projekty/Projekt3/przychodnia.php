<!DOCTYPE html>

<html>
<head>
    
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
    
    
    
    </head>

<body>
    
    <div id="baner">
        
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    
    <div id="panel-lewy">
        <h3>LISTA PACJENTÓW</h3>
       
             
        <?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'przychodnia');
        
         $zapytanie1 = mysqli_query($polaczenie, "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci");
            
            
        
         while($row = mysqli_fetch_array($zapytanie1)) {
		echo "".$row['id']." ".$row['imie']." ".$row['nazwisko']."</br>";
	}
	
       
        ?>
        <br>
        <br>
        
         
        Podaj id:
      <form action="pacjent.php" method="post">
          
    <input type="number" name="input_var"/>
        <input type="submit" name="send" value="Pokaż dane"/>
    </form>
        
        <h3>LEKARZE</h3>
        
        <ul>
  <li>pn-śr</li>
  
    <ol>
      <li>Anna Kwiatkowska</li>
      <li>Jan Kowalewski</li>
    </ol>
  
            <li>pn-śr</li>
            
            <ol>
      <li>Krzysztof Nowak</li>
      
    </ol>
</ul>
        
    </div>

    <div id="panel-prawy">
        
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <p>Brak wybranego pacjenta</p>
       
	
        
    </div>
    
    <div id="stopka">
        
        <p>Utworzone przez: MÓJ PESEL</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
        
    </div>
    
    </body>




</html>