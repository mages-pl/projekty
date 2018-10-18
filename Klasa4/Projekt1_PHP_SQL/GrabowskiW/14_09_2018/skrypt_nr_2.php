<?php
	//ini_set('error_reporting', 'off');
	$sz = $_POST['id'];
	$name = $_POST['name'];

	if(isset($id) && empty($name)) {
		$zapytanie2 = mysqli_query($polaczenie, "SELECT `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia` FROM Pacjenci WHERE id = '".$id."'");
		while($row2 = mysqli_fetch_array($zapytanie2)) {
			echo "<p>Imię i nazwisko: ".$row2['imie']." ".$row2['nazwisko']."</p>
			<p>Choroby przewlekłe: ".$row2['choroby_przewlekle']."</p>
			<p>Uczulenia: ".$row2['uczulenia']."</p>";
		}
	} else if(isset($name) && empty($id)) {
		//echo $name." ".$id;
		$zapytanie2 = mysqli_query($polaczenie, "SELECT * FROM `pacjenci` WHERE imie LIKE '%".$name."%'");
		while($row2 = mysqli_fetch_array($zapytanie2)) {
			echo "<p>Imię i nazwisko: ".$row2['imie']." ".$row2['nazwisko']."</p>
			<p>Choroby przewlekłe: ".$row2['choroby_przewlekle']."</p>
			<p>Uczulenia: ".$row2['uczulenia']."</p>";
		}
	} else echo "x";
?>