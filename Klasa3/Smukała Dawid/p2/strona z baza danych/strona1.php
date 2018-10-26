<head>
<meta charset="UTF-8">
       ;<!--  <link rel="stylesheet" type="text/css" href="css.css" /> -->
	   
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
$polacz= mysqli_connect("localhost","root","","cebulaxd")
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
 $sql=mysqli_query($polacz,"SELECT * FROM `uzytkownicy` where imie like '%".$_POST['x']."%' ");
 while($r=mysqli_fetch_array($sql)) {
	 echo "<b>".@$r['imie']."</b>".$r['nazwisko']."".$r['adres_zamieszkania'].$r['nr_telefomu'];
	 
 
 }
 
//mysqli_fetch_array(SELECT * FROM `uzytkownicy` ORDER BY "IMIE" ASC);

//print_r(mysqli_fetch_array($sql));
/*
while($r=mysqli_fetch_array($sql)){
echo $r["imie"]."<br/>";
}
*/
 ?>

	<?php
	 
	if(isset($_POST["x"])){
		echo 'costam: ';
	
	}
	?>
	<form method="POST">
	<input type="text" name="x" />
	<input type="submit" name="y" />
	</form>
	
	
</html>