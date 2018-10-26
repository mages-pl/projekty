<?php
	ini_set('error_reporting', 'off');
	$sz = $_POST['id'];
	$zapytanie2 = mysqli_query($polaczenie, "SELECT `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia` FROM Pacjenci WHERE id = ".$sz);
	while($row2 = mysqli_fetch_array($zapytanie2)) {
		echo "<p>Imię i nazwisko: ".$row2['imie']." ".$row2['nazwisko']."</p>
		<p>Choroby przewlekłe: ".$row2['choroby_przewlekle']."</p>
		<p>Uczulenia: ".$row2['uczulenia']."</p>";
	}
	if(empty($sz)) {
		echo "<h3 style=\"color: #ff0000;\">Nie podano numeru ID</h3>";
	}
?>