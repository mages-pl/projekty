<?php 
require_once '../../classes/Database.php';


$tabelka = new Database();
//$tabelka->table('abc');

echo $tabelka->table;
?>