<?php
require_once '../../controllers/UczniowieController.php';
require_once '../../controllers/KlasyController.php';
?>
<h3>Dodaj ucznia</h3>
<form method="POST">
<input type="text" name="imie"/>
<input type="text" name="nazwisko"/>
<select name="klasa_idKlasa">
<?php
$pobierzKlasy = new Database();
foreach ((new KlasyController())->index() as $klasa) {
    echo '<option value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
}
?>
</select>
 
<button name="dodajUczniaSubmit" type="submit">Przeslij</button>

</form>