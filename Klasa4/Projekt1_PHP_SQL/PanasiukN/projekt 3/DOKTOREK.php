<!doctype html>

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
			<h1>Przychodnia JP II</h1>
		</div>
		<div class="panel_lewy">
			<h2>LISTA PACJENTÓW</h2>
			<ol>
				<li> Knapinski</li>
				<li> Iwo</li>
				<li> Koriks</li>
				<li> Lono</li>

			</ol>
			
			
			<p>Podaj id:</p>
			
			
			<tr>
			<td> 
			<form method="post" action="DOKTOREK.PHP">
			<input type="text" name="id" /></td><td><input type="submit" value="Pokaż dane" />
			</form>
			</td>
			</tr>
			
			<h2>Lekarze</h2>
			<ul>
			    
			</ul>
			<ol>
			   
			</ol>
			<ul>
			    
			</ul>
			<ol>
			    
			</ol>
		</div>
		
		<div class="panel_prawy">
			<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <p>PACJENTOS</p>
			<?php
			echo "Info:".$_POST["id"];
			//mysqli_connect("localhost","root","","przychodnia");
			$zmienna=mysqli_connect("localhost","root","","auta");
			
			$pojemnik=mysqli_query($zmienna,"select * from samochody where id = ".$_POST["id"]);
			
			while($result=mysqli_fetch_array($pojemnik))
			{
				echo $result["marka"];
			}
			
			?>
		</div>
		<div class="stopka">
              <p>utworzone przez: 00000000000</p>
			  <u><a harf="nic">Pobierz</a></u>
              			  
		</div>


	</div>
</body>
</html>