<?php
require_once '../../controllers/UczniowieController.php';
require_once '../../controllers/KlasyController.php';
?>
<h3>Edycja ucznia</h3>

<?php
//print_r((new UczniowieController())->editUczen($_GET['idUczen']));
 
foreach((new UczniowieController())->editUczen($_GET['idUczen']) as $uczen)  {
   // echo "<b>imie</b>: ".$uczen['imie'];

?>
<form method="POST">
<input type="text" value="<?php echo $uczen['imie'] ?>" name="imie"/>
<input type="text"  value="<?php echo $uczen['nazwisko'] ?>" name="nazwisko"/>
<select name="klasa_idKlasa">
<?php
$pobierzKlasy = new Database();
foreach ((new KlasyController())->index() as $klasa) {
    if($klasa['idKlasa'] == $uczen['Klasa_idKlasa']) { 
        echo '<option selected="selected" value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
    } else { 
    echo '<option value='.$klasa['idKlasa'].'>'.$klasa['nazwa'].'</option>';
    }
}
?>
</select>
 
<button name="edycjaUczniaSubmit" type="submit">Zapisz</button>
<?php

}
?>
</form>