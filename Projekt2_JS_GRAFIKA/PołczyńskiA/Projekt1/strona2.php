
<!DOCTYPE html>
<html>
 <head>
     
  <title>Strona główna</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="global.css">
 </head>
    
 <body>
     
<div id="baner"> 
     
     <a href="index.html"><img src="baner.jpg" alt="baner"></a>
  </div>
     
     <div id="contener">
     
     
    
     <div id="menu">
     
     Menu:
          <br>
         -<a href="strona1.html">
         
         proste działania </a>
         <br>
         -<a href="strona2.php">potęgowanie</a>
     </div>
     
     <div id="tresc">
     
  <H1>POTĘGOWANIE</H1>
         
          <form method="post" action="strona2.php">
<i>Podaj podstawę potęgi:</i>
 <input type="number" name="liczba1" /><br/>
<i>Podaj dodatni, całkowity wykładnik potęgi:</i>
 <input type="number" name="liczba2" /><br/>
              <br>
<input type="submit" value="POTĘGOWANIE" name="oblicz"/>
</form>
         
         <br>
         <br>
<?php
if (empty($_POST['liczba1']) || (empty($_POST['liczba2'])
 && $_POST['liczba2']!=0)) {
    echo "Wpisz podstawę i wykładnik potęgi";
}
else {
 if ($_POST['liczba2']>=0) {    
 echo "Wynik działania wynosi: ";
 echo pow($_POST['liczba1'], $_POST['liczba2']);
 }
 else {
 echo "Wykładnik potęgi musi być dodatni";
 }
}  
?>
     </div>
         
          </div>
     
    </body>
    
</html>


  