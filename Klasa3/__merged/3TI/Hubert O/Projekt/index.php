<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<?php
$polaczenie = mysqli_connect("localhost","root","","spismiejscowosci");

//$slq = mysqli_query($polaczenie,"SELECT * FROM miasta ORDER BY `iloscMieszkancow` ASC"); 

$slq = mysqli_query($polaczenie,"SELECT * FROM miasta WHERE nazwaMiasta LIKE '%".$_POST['X']."%' ORDER BY `iloscMieszkancow` ASC"); 


//print_r(mysqli_fetch_array($slq));

$k=0;
while($r=(mysqli_fetch_array($slq))) {
	if($k==0) { 
	echo "Znaleziono (fraza: ".$_POST['X'].") <br/>";
	} 
	$k++;
	
echo  "<span style=\"color: Blue\">".$r ["nazwaMiasta"]." </span> ".$r["polozenie"]." <span style=\"color: Navy\">".$r["iloscMieszkancow"]." </span><br/>" ;
}

?>
<form method="post">
<input type="text" name="X" />
<input type="submit" name="Y"/>
</form>

<?php
/*
if(isset($_POST['X'])){
	echo 'Masno: '.$_POST['X'];
}
*/
?>
</head>
<body background="11.jpg">

</body>

</html>

