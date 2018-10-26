<!DOCTYPE html>
<?php
$polacz = mysqli_connect("127.0.0.1","root","","uczniowie");
//$sql=mysqli_query ($polacz,"SELECT * FROM `dziennik` ORDER BY `dziennik`.`Nazwisko` ASC");
$sql=mysqli_query($polacz,"SELECT * FROM `dziennik` WHERE Imie LIKE '%".$_POST["x"]."%'");

//print_r(mysqli_fetch_array($sql));
while($r=mysqli_fetch_array($sql)) { 
echo "<b>".$r['Imie']."</b> ". $r['Nazwisko']." ". $r['Klasa']." ". $r['Numer']." "."<br/>";

}
echo "<img src=\"WIL.gif\" border=\"0\" width=\"395\" height=\"310\" style=\"float: right;\" >";
?>

<html>
<head>
<?php
if(isset($_POST["x"])){
	echo "Wyszukaj ".$_POST["x"];
} 
?>
<form method="POST">
<input type="text" name="x" />
<input type="submit" name="y" />
<p> Wyszukiwarka lepsza od Google </p>
</head>
<body>
</body>
</html>
