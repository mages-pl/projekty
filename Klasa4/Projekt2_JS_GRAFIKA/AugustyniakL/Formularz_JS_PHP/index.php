<!doctype html>
<html>
<head>
 
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="index.php" method="post"> 

<div class="imput1"><input class="form" type="text" name="name"><br><div>
<div class="imput2"><input class="form" type="text" name="mail"><br><div>
<div class="imput3"><input class="form" type="password" name="haslo1"><br><div>
<div class="imput4"><input class="form" type="password" name="haslo2"><br><div>

<div class="checkbox_wrapper">
    <input type="checkbox" name="check" />
    <label></label>
</div>

<div class="sub">


<INPUT  Class="ok" TYPE="SUBMIT" NAME="form" Value="">

</div>

<?php



error_reporting(0);
$name = $_POST['name']; 
$mail = $_POST['mail']; 
$haslo1 = $_POST['haslo1']; 
$haslo2 = $_POST['haslo2']; 
$check = $_POST['check']; 

$liczba = strlen($haslo1);


if($name and $mail and $haslo1 and $haslo2 and $haslo1==$haslo2 and $check and $liczba<='7'){echo "<div class='error4'> <div>";}

if($name and $mail and $haslo1 and $haslo2 and $haslo1==$haslo2 and $check and $liczba>='8'){

try  {
	$pdo = new PDO('mysql:host=localhost;dbname=baza', 'root', '');
	$pdo->query('SET NAMES utf8');
} catch (PDOException $e)  {
    echo 'Error: ' . $e->getMessage();
    exit();
} 
$sql = "INSERT INTO `rejstracja`(`ID`, `Name`, `mail`, `Haslo`) VALUES ('','$name','$mail','$haslo1')";
$stmt = $pdo->prepare($sql); 
$stmt->execute();
$pdo = null;

}

if(!$name or !$mail or !$haslo1 or !$haslo2){echo "<div class='error3'> <div>";}



	
if($name and $mail and $haslo1 and $haslo2 and $haslo1!=$haslo2){echo "<div class='error2'> <div>";}



if($name and $mail and $haslo1 and $haslo2 and $haslo1==$haslo2 and !$check){echo "<div class='error1'> <div>";}




















?>




</body>
</html>