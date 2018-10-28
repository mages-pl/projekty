<?php
require_once './classes/Database.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>

<?php 
if (isset($_POST['update'])) {
    echo 'aktualizuje<br/>';
    $updateUczen = new Database();
    $updateUczen->table('listauczniow')->where('listauczniow', '=', '1')->update($_POST);
}

?>

</head>
<body>
<?php 
$db = new Database();

$dane = $db->table('listauczniow')->get(); //)->get();
$dane2 = $db->table('listauczniow')->where('imie', '=', 'test')->delete();

echo 'test '.$dane2;

foreach ($dane as $d) {
    echo $d['imie'];
}

?>
<br/><br/>------------------------<br/><br/>
<h2>Dodaj ucznia</h2>
<form name="dodaj_ucznia" method="POST"> 
<input name="imie" type="text">
<input name="nazwisko" type="text">
<select name="klasa_idKlasa">
<?php
$pobierzKlasy = new Database();
foreach ($pobierzKlasy->table('klasa')->get() as $klasa) {
    echo '<option value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
}
?>
</select>
 
<button name="dodaj_uzytkownika" type="submit">Przeslij</button>
<button name="usun_uzytkownika" type="submit">usun</button>
</form>

<?php

$DodajUczniow = new Database();
print_r($_REQUEST);
if (isset($_POST['dodaj_uzytkownika'])) {
    echo 'utowrz';
    echo $DodajUczniow->table('listauczniow')->insert($_POST);
}

if (isset($_POST['dodaj_ucznia'])) {
    echo 'blabla';
}
?>

<h2>Dodaj klase</h2>

<form name="dodaj_ucznia" method="POST"> 
<input name="imie" type="text">
<select name="specjalizacja">
<option>TI</option>
<option>TE</option>
<option>TAK</option>
<option>TMR</option>

</select>
<input name="nazwisko" type="text">
 
<button type="submit">Przeslij</button>
</form>

 <h2>
 Nauczyciele
 </h2>
<?php
$wyswietlNauczycieli = new Database();

foreach ($wyswietlNauczycieli->table('listanauczycieli')->get() as $nauczyciel) {
    echo $nauczyciel['imie'];
}
?>

<h2>
Klasy
</h2>
<?php
$wyswietlKlasy = new Database();

foreach ($wyswietlKlasy->table('klasa')->get() as $klasa) {
    echo $klasa['nazwa'].'<br/>';
    echo $klasa['specjalizaca'].'<br/>';
}
?>

<h2>
Update dane
</h2>
<?php 
$pobierzUcznia = new Database();
$pobieranieUcz = $pobierzUcznia->table('listauczniow')->where('listauczniow', '=', '1')->get();

?>
<form name="dodaj_ucznia" method="POST">
<?php 
foreach ($pobieranieUcz as $ucz) {
    ?>
<input name="imie" type="text" value="<?php echo $ucz['imie']; ?>">
<input name="nazwisko" type="text" value="<?php echo $ucz['nazwisko']; ?>">
 
<select name="klasa_idKlasa">
<?php
$pobierzKlasy = new Database();
    foreach ($pobierzKlasy->table('klasa')->get() as $klasa) {
        echo '<option ';
        echo ''.$ucz['Klasa_idKlasa'] == $klasa['idKlasa'] ? 'selected="selected"' : ' ';
        echo  'value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
    } ?>
</select>
 
<button name="dodaj_uzytkownika" type="submit">Przeslij</button>
<button name="usun_uzytkownika" type="submit">usun</button>
<button name='update'>Zaktualizuj dane</button>
<?php
}
?>
</form>


</body>
</html>