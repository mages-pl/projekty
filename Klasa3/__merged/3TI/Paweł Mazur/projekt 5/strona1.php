<head>
<meta charset="UTF-8">
       ;<!--  <link rel="stylesheet" type="text/css" href="css.css" /> -->
		<link rel="stylesheet" href="index.css">
		<style>
	   html {
 
	color: #333;
 
}
body {
        margin: 0;
        display: block;	 
        overflow: auto;
		font-family:arial;
}
a {
	color:#333;
}
#header {
        width: 100%;
        float: left;
	background-color: red;
}
#nav {
	width: 40%;
	float: left;
	overflow: hidden;
	background-color: black;
}
#content {
	width: 60%;
	float: left;
	overflow: hidden;
	background-color: yellow;
}
#footer {
	clear: both;
	width: 100%;
	background-color: blue;
}
.navbar { 
    background-color: #f8f9fa!important;
	padding: 15px 10px;
	    float: left;
    width: 100%;
}
.nav-link { 
    color: rgba(0,0,0,.5);
}

.navbar-brand, .navbar-toggler, #navbarNavAltMarkup  { 
float:left;
}
. top{

	   </style>
		 <?php
$polacz= mysqli_connect("localhost","root","","cebulaxd");
mysqli_set_charset($polacz,"UTF8");

 // usunRow
 //DELETE FROM `uzytkownicy` WHERE `uzytkownicy`.`id` = 4
 if(isset($_POST['usun'])) {
	 echo "usuwanie usera o id =".$_POST['id'];
	 $sql = "DELETE FROM `uzytkownicy` WHERE `uzytkownicy`.`id` = ".$_POST['id']."";
	 mysqli_query($polacz,$sql);
 }
 
 if(isset($_POST['dodaj_usera'])) { 
	
	$sql = "INSERT INTO `uzytkownicy` (`imie`, `nazwisko`, `adres_zamieszkania`, `nr_telefomu`) VALUES ('".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['adres_zamieszkania']."', '".$_POST['nr_telefomu']."');";

	$rezultat = mysqli_query($polacz,$sql);
	
 echo "Został dodany użytkownik: ".$_POST['imie'];
	}
?>	
<?php//uaktualnianie
//UPDATE `uzytkownicy` SET `imie` = 'g', `nazwisko` = 'g', `adres_zamieszkania` = 'g', `nr_telefomu` = '7' WHERE `uzytkownicy`.`id` = 8
if(isset($_POST['edytuj_usera'])) {
	echo "edytowano usera o id =".$_POST['id'];
	$sql = "UPDATE `uzytkownicy` SET `imie` = '".$_POST['imie']."', `nazwisko` = '".$_POST['nazwisko']."', `adres_zamieszkania` = '".$_POST['adres_zamieszkania']."', `nr_telefomu` = '".$_POST['nr_telefomu']."' WHERE `uzytkownicy`.`id` = ".$_POST['id']."";
	mysqli_query($polacz,$sql);
}
?>
    </head>
    <body>
	
	<!--
         <div id="header">header</div>
         <div id="nav">nav</div>
         <div id="content">content</div>
         <div id="footer">footer</div>
		-->
 <div class="top">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Stona Główna <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Galeria</a>
      <a class="nav-item nav-link" href="#">Kontaky</a>
    <a class="nav-item nav-link" href="#">Cennik</a>
    </div>
  </div>
</div>
<div>

	<?php
	// 
	//if(isset($_POST["x"])){
	//	echo 'costam: ';
	//
	//}
	?>
	
		<h1>Wszystkie dane z bazy </h1>
 
	<table class=greyGridTable>
<tbody>

<?php
// getAll

 $sql1=mysqli_query($polacz,"SELECT * FROM `uzytkownicy` ");
 while($d=mysqli_fetch_array($sql1)) {
	 ?>
	 <form method="POST">
	 <?php
	 echo "<tr><td>".@$d['imie']."</td><td>".$d['nazwisko']."</td><td>".$d['adres_zamieszkania']."</td><td>".$d['nr_telefomu']."</td><td><input type='submit' name='zmien' value='Zmień'></input><input type='submit' name='usun' value='Usuń'> <input type='hidden' name='id' value='".$d['id']."'></input></td></tr>";
	 ?>
	 </form>
 <?php
 }
  
 ?>
 </tbody>
</table>
	
	<h1>Wyszukiwanie z bazy </h1>
	<form method="POST">
	<input type="text" name="x" />
	<input type="submit" name="y" />
	</form>
	<table class=greyGridTable>
<tbody>
<?php

// wyszukiwanie
if(isset($_POST["x"])){
 $sql=mysqli_query($polacz,"SELECT * FROM `uzytkownicy` where imie like '%".$_POST['x']."%' ");
 while($r=mysqli_fetch_array($sql)) {
	 echo "<tr><td>".@$r['imie']."</td><td>".$r['nazwisko']."</td><td>".$r['adres_zamieszkania']."</td><td>".$r['nr_telefomu']."</td><td><input type='submit' name='zmien' value='Zmień'></input><input type='submit' name='usun' value='Usuń'></input></td></tr>";
	 
 
 }
}

//mysqli_fetch_array(SELECT * FROM `uzytkownicy` ORDER BY "IMIE" ASC);

//print_r(mysqli_fetch_array($sql));
/*
while($r=mysqli_fetch_array($sql)){
echo $r["imie"]."<br/>";
}
*/
 ?>
</tbody>
</table>
</div>
<table>
<tr>
<td>
<div class="left">
	<h1>Dodawanie użytkowników do bazy </h1>
	<form method="POST">
	<label>Imie</label>
	<br/>
	<input type="text" name="imie" /> <br/>
	<label>nazwisko</label>
	<br/>
		<input type="text" name="nazwisko" /> <br/>
		<label>adres_zamieszkania</label>
		<br/>
			<input type="text" name="adres_zamieszkania" /> <br/>
			<label>nr_telefomu</label>
			<br/>
				<input type="text" name="nr_telefomu" /> <br/>
	<input type="submit" name="dodaj_usera" /> <br/>
	</form>
</div>
</td>
<td>
<div class="right">
	<?php
	<h1>Edytowanie użytkownika</h1>
	<form method="POST">
	<label>Imie</label>
	<br/>
	<input type="text" name="imie" /> <br/>
	<label>nazwisko</label>
	<br/>
		<input type="text" name="nazwisko" /> <br/>
		<label>adres_zamieszkania</label>
		<br/>
			<input type="text" name="adres_zamieszkania" /> <br/>
			<label>nr_telefomu</label>
			<br/>
				<input type="text" name="nr_telefomu" /> <br/>
	<input type="submit" name="edytuj_usera" /> <br/>
	</form>
	?>
</div>
</td>
</tr>
</table>
</html>