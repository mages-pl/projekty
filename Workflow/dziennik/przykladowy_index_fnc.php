<!doctype html> 

<html> 

<head> 
	<meta charset="utf-8"/>
	<style>
		body{font-family: Tahoma; font-size: 12px; line-height: 1.6;}
	</style>
</head>
<body>
<?php

// Dane do bazy

$host = 'localhost';
$user = 'root';
$haslo = 'vertrigo';
$baza = 'szkola_dziennik';

// Polaczenie z baza

function polaczenie($host, $user, $haslo, $baza)
{
    $connect = mysqli_connect($host, $user, $haslo, $baza) or die('Problem z połączeniem z bazą');

    return $connect;
}
$connect = polaczenie($host, $user, $haslo, $baza);
$connect->set_charset("utf8");

// Wyswietlenie danych

function joinTable($tabela, $tabela2, $klucz, $klucz2)
{
    $sql = ' JOIN '.$tabela2.' ON '.$tabela.'.'.$klucz.' = '.$tabela2.'.'.$klucz2.' ';

    return $sql;
}

function showTable($connect, $tabela, $fields, $join, $condition, $order, $by, $limit)
{
    $sql = 'SELECT '.$fields.' FROM `'.$tabela.'`';

    if ($join != '') {
        $sql .= $join;
    } elseif (($condition != null) || ($condition != '')) {
        $sql .= ' WHERE '.$condition;
    } elseif (($order != null) || ($order != '') && (($by != null) || ($by != ''))) {
        $sql .= ' ORDER BY '.$by.' '.$order;
    } elseif (($limit != null) || ($limit != '')) {
        $sql .= ' LIMIT '.$limit;
    } else {
    }
    $resultat = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    return mysqli_fetch_all($resultat, MYSQLI_ASSOC);
}

// Dodanie danych

function addRow($connect, $tabela, $attrs, $params)
{
    $sql = 'INSERT INTO `'.$tabela.'`('.$attrs.') VALUES ('.$params.')';

    mysqli_query($connect, $sql) or die(mysqli_error($connect));
}

// Usuniecie danych

function deleteRow($connect, $tabela, $param, $id)
{
    $sql = 'DELETE FROM `'.$tabela.'` WHERE `'.$tabela.'`.`'.$param.'` = '.$id.'';

    mysqli_query($connect, $sql);
}

if (isset($_POST['dodawanie_uzytkownika'])) {
    echo 'dodaje';

    addRow($connect, 'listauczniow', 'imie, nazwisko,Klasa_idKlasa', "'".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['Klasa_idKlasa']."'");

    addRow($connect, 'listanauczycieli', 'imie, nazwisko', "'".$_POST['imie']."', '".$_POST['nazwisko']."'");
}

?>


<h1>Dodaj ucznia</h1>
<form method="POST">
<br/>
<label>Imie</label>
<br/>
<input type="text" name="imie" />
<br/>
<label>Nazwisko</label>
<br/>
<input type="text" name="nazwisko" />
<br/>
<label>Klasa</label>
<br/>
<select name="Klasa_idKlasa">
<?php


$sql = 'SELECT * FROM klasa';

$result = mysqli_query($connect, $sql) or die('error');

while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row['idKlasa']; ?>"><?php echo $row['nazwa'].' '.$row['specjalizacja']; ?></option>
    <?php
}

?>
</select>
<input type="submit" name="dodawanie_uzytkownika" value="Dodaj użytkownika" />
</form>

<h1>Lista uczniow</h1>
<!-- <h3>nuczyciele</h3> -->
<ol>
	<?php
	foreach (showTable($connect, 'listauczniow', '*', joinTable('listauczniow', 'klasa', 'Klasa_idKlasa', 'idKlasa'), '', '', '', 2) as $row) {
		echo '<li>'.$row['nazwisko'].' '.$row['imie'].' ('.$row['nazwa'].')</li>';
	}
	?>
</ol>
</body>
</html>
