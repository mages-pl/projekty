<?php
$polaczenie=mysqli_connect("localhost", "root", "", "przychodnia");
$pobierzPacjentow="select * from pacjenci where id=".$_POST["szukaj"];
$rezultat=mysqli_query($polaczenie, $pobierzPacjentow);
while($row=mysqli_fetch_array($rezultat)){
echo $row["imie"]." ".$row["nazwisko"]." ".$row["uczulenia"];
}
if(!empty ($_POST["szukaj"])) {
	echo $_POST["szukaj"];
}
?>

<form method="post">
<input type="text" name="szukaj">
<input type="submit" name="wyślij" value="wyszukaj">
</form>

