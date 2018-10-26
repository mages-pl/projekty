<!DOCTYPE html>


<html>

<head>

  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="F.T.">
<link rel="Stylesheet" type="text/css" href="css.css" />
<title>Tak To Ja</title>
<meta name="viewport" content="width=device-width, intial-scale=1"/>

</head>
<body>

<div class="karton">
	<div id="gora">

	 <img src="logo.png">

	</div>
<br>
	<div id="srodek">
		<div id="lewo">
		 <font size="5"> lewo</font>

		 <?php

		 $polaczenie = mysqli_connect ("localhost","root","","czogat");
		 $sql = mysqli_query ($polaczenie,"SELECT * FROM `zakup` ORDER BY `zakup`.`id_uzytkownika` DESC");
		 mysqli_set_charset($polaczenie,"UTF8");
		// print_r(mysqli_fetch_array($sql));
		 while ($petla = (mysqli_fetch_array($sql))) 
		?>
	<h1>
	Dodawanie
	</h1>
	<form method="POST"> 
	</br>
			<label>Użytkownik</label>
	<br/>
		<select name="user">
		<?php	
		 $fsdfsdfsql = mysqli_query($polaczenie,"SELECT * FROM `uzytkownicy`");
		 
		 while($user = mysqli_fetch_array($fsdfsdfsql)) {
?>					 
		<option value="<?php echo $user['id']; ?>"><?php echo $user['imie'].' '.$user['nazwisko']; ?></option>
<?php	
		 }		 
		 ?>
		</select>
	</br>
	<label>Towar</label>
	<br/>
	<input type="text" name="nazwa_towaru" />
	<br/>
	<label>Cena</label>
	<br/>
	<input type="text" name="cena" />
	<br/>
	<label>Ilosc</label>
	<br/>
	<input type="text" name="ilosc" />
	<br/>
	<input type="submit" name="dodaj_zakup" value="dodaj" />
	</form>
		<?php 
		if(isset($_POST['x'])) :
		?>
<table>
	<tr>
	<td>
		<?php
		echo $r["nazwa_towaru"]."<br/>";
		?>
	</td>
	<td>
		<?php
		echo $r["cena"]."<br/>";
		?>
	</td>
		<td>
		<?php
		echo $r["ilosc"]."<br/>";
		?>
	</td>
	</tr>
	</table>
		<?php 
		endif;
		?>
		<?php if(isset($_POST['dodaj_zakup'])){
		if(!empty($_POST['nazwa_towaru']) && !empty($_POST['cena'])) {
			
		 $dodaj_zakup = mysqli_query($polaczenie,"INSERT INTO `zakup` (`id_uzytkownika`,`nazwa_towaru`, `cena`, `ilosc`) VALUES ('".$_POST['user']."','".$_POST['nazwa_towaru']."', '".$_POST['cena']."', '".$_POST['ilosc']."')") or die(mysqli_error($polaczenie));
		} else {
		echo "Dodaj Wartosci Pol";
		 //echo $_POST['user'];
		}
		}
		?>
		 
		</div>
		<div id="prawo">
		<?php 
		if(isset($_POST['x'])) :
		?>
		<?php
		$slq = mysqli_query($polaczenie,"SELECT * FROM zakup WHERE nazwa_towaru LIKE '%".$_POST['x']."%' ORDER BY `cena` ASC");
		echo  "<span style=\"color: Green\">".$r ["nazwa_towaru"]." </span> ".$r["cena"]." </span><br/>" ;
		?>
		<?php 
		endif;
		?>
		<form method="post">
		<input type="text" name="x" />
		<input type="submit" name="y"/>
		</form>
		 <font size="5"> prawo</font>

		</div>
	</div>
	<div id="dol">

	 <font size="5"> doł</font> 

	</div>
</div>

</body>
</html>