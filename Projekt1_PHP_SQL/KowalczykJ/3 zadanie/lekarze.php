<!doctype html>

<?php
 //mysqli_connect('localhost', 'root', '', 'przychodnia');
  $POLACZENIE=mysqli_connect('localhost', 'root', '', 'przychodnia');
  
?>
<html>

<head>
 
	<meta charset="utf-8"/>
	<title>zadania</title>
	<link rel="stylesheet" type="text/css" href="lekarze.css"/>
</head>
<body>
	<div class="strona">
		<div class="baner">
		<br>
			<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
		</div>
		<div class="panel_lewy">
			<h2>LISTA PACJENTÓW</h2>
			<ol>
				<li> Anna Kowalska</li>
				<li> Jan Kowalski</li>
				<li> Jan Nowak</li>
				<li> Katarzyna Nowak</li>

			</ol>
			
			
			<p>Podaj id:</p>
			
			<tr>
			<td><input type="text" name="id" /></td><td><input type="submit" value="Pokaż dane" /></td>
			</tr>
			
			<h2>Lekarze</h2>
			<ul>
			    <li> po-śr </li>
			</ul>
			<ol>
			    <li>Anna Kwiatkowska </li>
				<li>Jan Kowalewski </li>
			</ol>
			<ul>
			    <li> czw - pt </li>
			</ul>
			<ol>
			    <li>Krzysztof Nowak </li>
			</ol>
		</div>
		
		<div class="panel_prawy">
			<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <p>Brak wybranego pacjęta</p>
			<?php
			$ZAPUTANIE=mysqli_query($POLACZENIE, 'select * from pacjenci where id > 3 order by `imie i nazwisko` ASC');
			//$TEST = mysqli_fetch_array($ZAPUTANIE);
			while($COS=mysqli_fetch_array($ZAPUTANIE))
				
			{
				echo $COS['uczelnia'];
				echo "   +   ".$COS['imie i nazwisko'].'<br>';
			}
			
		//	print_r($TEST);
			?>
		</div>
		<div class="stopka">
              <p>utworzone przez: 00000000000</p>
			  <u><a harf="nic">Pobierz plik z kwerendy</a></u>
              			  
		</div>


	</div>
</body>
</html>