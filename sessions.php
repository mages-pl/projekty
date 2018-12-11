<?php
// inicjacja sesji

session_start();

if(!isset($_SESSION['login'])) { 
$_SESSION['login'] = '0';
}

if(isset($_POST['zaloguj'])) {
     $_SESSION['login'] = '1'; 

}

if(isset($_POST['wyloguj'])) {
    $_SESSION['login'] = '0'; 

}
// Twrzenie ciastka
if(isset($_GET['q'])) {
if($_GET["q"] == 'stworz_ciastko') {
setcookie("testowa_nazwa_ciastka","testowa_wartosc_ciastka".time(),time()+5*24*60*60);
}

if($_GET["q"] == 'usun_ciastko') {
    #unset($_COOKIE['testowa_nazwa_ciastka']);
    setcookie("nazwa2",null,-1);
}
if($_GET["q"] == 'stworz_2_ciastko') {
    setcookie("nazwa2","testwa_wart2");
}
if($_GET["q"] == 'edytuj_ciastko') {
    setcookie("testowa_nazwa_ciastka","inna_wart_ciastka".time());
}
}


?>

<!-- <a href="?q=stworz_ciastko">Stworz ciastko</a>
<br/>
<a href="?q=usun_ciastko">Usuń I ciastko</a>
<br/>
<a href="?q=stworz_2_ciastko">Dodaj inne ciastko</a>
<br/>
<a href="?q=edytuj_ciastko">Edytuj II ciastko</a> -->

<form method="POST">
<?php
if($_SESSION['login'] == '1') { 
?> 
<a href="?page=kategorie">Kategorie</a>
<a href="?page=artykuly">Artykuly</a>


Zalgowano 
<input type="submit" name="wyloguj" value="wyloguj" />
<?php
} 
else 
{ 

 ?>
<input type="submit" name="zaloguj" value="zaloguj" />
<?php 
} 
?>
</form>

<?php
if(isset($_COOKIE['testowa_nazwa_ciastka']))  {
if($_COOKIE['testowa_nazwa_ciastka'] == 'testowa_wartosc_ciastka') { 
 echo "tu coś wyświetle sobie ";
}
}


?>
<?php 
if(isset($_GET['page'])) { 
    if($_SESSION['login'] == '1') {
if($_GET['page'] == 'kategorie') { 
echo "Kategorie";
$kategorie = ['Kategoria1','Kategoria2','Kategoria3','Kategoria4'];

echo '<table>';

foreach($kategorie as $klucz => $kategoria) { 
echo '<tr>';
echo '<td>';
echo $klucz;
echo '</td>';
echo '<td>';
echo $kategoria;
echo '</td>';
echo '</tr>';

}

echo '</table>';
echo "lista kategorii";
}
if($_GET['page'] == 'artykuly') { 
    echo "Artykuly";
}

}
 else { 
     echo "dostep zabroniony";
 }

}

?>

