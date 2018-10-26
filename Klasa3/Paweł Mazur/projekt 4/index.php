<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="index.css">
	</head>
	<body>
		<table class=greyGridTable>
		<tbody>
		<?php
			$polacz = mysqli_connect("localhost","root","","mazur");
			#$sql=mysqli_query ($polacz,"SELECT * FROM `dziennik` ORDER BY `dziennik`.`Nazwisko` ASC");
			$sql=mysqli_query ($polacz,"SELECT * FROM `dziennik` WHERE Imie LIKE '%".$_POST["x"]."%'");
			while($r=mysqli_fetch_array($sql)) { 
				echo 
				"<tr>
					<td>".$r['Imie']."</td>
					<td>".$r['Nazwisko']."</td>
					<td>".$r['Klasa']."</td>
					<td>".$r['Numer']."</td>
				</tr>
				";
			} 
		?>
		</tbody>
		</table>
		<?php
			if(isset($_POST['x'])){
				echo 'Wynik wyszukiwania dla: '.$_POST['x'];
			}
		?>
		<form method="POST">
			<input type="test" name="x">
			<input type="submit" name="y">
		</form>
	</body>
</html>