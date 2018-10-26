<!doctype html>
<html>
<head>
<?php
$con_bla = mysqli_connect("localhost","root","","szypko");
?>
</head> 
<body>

<body bgcolor="gray"> 
<center><img src="napis.png"/></center>
<table border="5">
<tr>
<td>
Strona poświęcona o niczym. Wyróżnia ją coś takiego, że jest o niczym a jednak o tym że jest o niczym, więc możnaby było się kłócić czy ta strona jest jednak o czymś,
czy może jednak o niczym. Wielu ludzi uważa jednak że strona ta jest zupełnie o niczym i nie powinna znajdować się w internecie, dlaczego? Na to pytanie jest jedna 
prawidłowa odpowiedź: Ponieważ jest o niczym! Dla mnie ta strona jest naprawdę o czymś, nazywając ją stroną o niczym nie mówimy prawdy, bo zawsze ktoś znajdzie
coś żeby temu zaprzeczyć. Głownie strona jest o niczym ale można powiedzieć ze strona jest o bronieniu się przed mówieniem że owa strona jest o niczym.
</td>	
</tr>
</table>

<table>
<?php
//$sql=mysqli_query($con_bla,"SELECT * FROM `adresy`");
//print_r(mysqli_fetch_array($sql));
//echo "cokolwiek";
$sql=mysqli_query($con_bla,"SELECT * FROM `adresy` WHERE miasto LIKE '%".$_POST['x']."%'");
while($DziewioNa=mysqli_fetch_array($sql)){
	?>
	<tr>
	<td>
	<?php
	echo $DziewioNa["ulica"]."<br/>";
	?>
	</td>
	<td>
<?php
	echo $DziewioNa["kod"]."<br/>";
	?>
	</td>
	<td>
	<?php
	echo $DziewioNa["miasto"]."<br/>";
	?>
	</td>
	</tr>
	<?php
	}
?>
<?php if(isset($_POST['x'])){
		echo "dziewiona: ",$_POST['x'];
}
?>
<form method="POST">
<input type="text" name="x" />
<input type="submit" name="y" />
</form>




</body>
</html>