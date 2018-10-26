	<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
	
	<script src="czas.js"></script>
	

   <div class="tarcza"> <img src="tarcza.png"/><div>
   	<div class="sekundnik" style="margin-left:400px; margin-top:210px;"><h2 style="color:white; font-family:arial;" id="data"></h2></div>
   		<div class="sekundnik"><img src="minutnik.png" id="minutnik"/><div>
				<div class="sekundnik"><img src="godzinnik.png" id="godzinnik"/><div>
	<div class="sekundnik"><img src="sekundnik.png" id="sekundnik"/><div>

	
	
	
	
	
	
	
	<script> showTextTime()
	
	
	   const currentDate = new Date();
		var dzisiaj = currentDate.getDate()
	 data.innerHTML = dzisiaj;

	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
	</html>