<?php
require_once '../../controllers/UczniowieController.php';

?>
<h3>Ucznowie</h3>
<table>
<?php
foreach ((new UczniowieController())->index() as $uczen) {
    ?>
<tr>
<td>#<?php echo $uczen['listaUczniow']; ?> 
</td>
<td><?php echo $uczen['imie']; ?> 
</td>
<td><?php echo $uczen['nazwisko']; ?> 
</td>
<td>
<form method="POST">
<input type="hidden" name="ID_DeleteUczen" value="<?php echo $uczen['listaUczniow']; ?>" />
<button name="usunUczniaSubmit">Usun</button>
</form>
</td>
</tr>

    <?php
}
?>
</table>
<a href="./add.php">Dodaj ucznia</a>