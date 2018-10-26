<!doctype html> 

<html> 

<head> 
<meta charset="utf8"/>
<?php
$host = "localhost";
$user = "root";
$haslo = "";
$baza = "dziennik";


function polaczenie($host,$user,$haslo,$baza) { 
    mysqli_connect($host,$user,$haslo,$baza) or die("Problem z połączeniem z bazą");
}
$connect = mysqli_connect($host,$user,$haslo,$baza) or die("Problem z połączeniem z bazą");


function showRow($connect,$tabela,$fields,$condition,$order,$by,$limit) { 


    $sql = "SELECT ".$fields." FROM `".$tabela."`";

    if(($condition != null) || ($condition != ''))  {
$sql .= " WHERE ".$condition;
    } else if(($order != null) || ($order != '') && (($by != null) || ($by != '')))  {
        $sql .= " ORDER BY ".$by." ".$order;  
    }  
     else if(($limit != null) || ($limit != ''))  {
        $sql .= " LIMIT ".$limit;  
    }

     
     $resultat = mysqli_query($connect,$sql);
 
$tab_fields = explode(",",$fields);

// print_r($tab_fields);

while($r=mysqli_fetch_array($resultat))  {
echo "gf";
}
//print_r(mysqli_fetch_array($resultat));

    //   for($i=0;$i=mysqli_fetch_array($resultat);$i++)  { 
        
    //     for($j=0;$j<count($tab_fields);$j++) { 
    //     echo $i[$tab_fields[$j]];
    // }
    // echo "<br/>";

    //   //  echo $tabela." ".$fileds." ".$condition." ".$order." ".$limit;
    // }
      //echo $tabela." ".$fileds." ".$condition." ".$order." ".$limit;

 //echo $sql."<br/>";
}



function addRow($connect,$tabela,$attrs,$params) { 

    
    $sql = "INSERT INTO `".$tabela."`(".$attrs.") VALUES (".$params.")"; 

    mysqli_query($connect,$sql) or die(mysqli_error($connect));    

}
function deleteRow($connect,$tabela,$param, $id) {

    $sql = "DELETE FROM `".$tabela."` WHERE `".$tabela."`.`".$param."` = ".$id."";

    mysqli_query($connect,$sql);

}





if(isset($_POST['dodawanie_uzytkownika']))   {

    echo "dodaje";

    addRow($connect,"listauczniow","imie, nazwisko,Klasa_idKlasa","'".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['Klasa_idKlasa']."'");

    addRow($connect,"listanauczycieli","imie, nazwisko","'".$_POST['imie']."', '".$_POST['nazwisko']."'");
}
 
?>
</head>
<body>
<h1>Dodaj ucznia</h1>
<form method="POST">
<br/>
<label>Imie</label>
<br/>
<input type="text" name="imie" />
<br/>
<label>Nazwisko</label>
<br/>
<input type="text" name="nazwisko" />
<br/>
<label>Klasa</label>
<br/>
<select name="Klasa_idKlasa">
<?php
 

$sql = "SELECT * FROM klasa";
 
$result = mysqli_query($connect, $sql) or die("error");
 

while($row = mysqli_fetch_array($result))  {
    ?>
    <option value="<?php echo $row['idKlasa']; ?>"><?php echo $row['nazwa']." ".$row['specjalizacja']; ?></option>
    <?php
}

?>
</select>
<input type="submit" name="dodawanie_uzytkownika" value="Dodaj użytkownika" />
</form>

<h1>Lista uczniow</h1>
<?php
$tab = ['listaUczniow','listaNuaczycieli','nr_lekcji','zajecia'];

showRow($connect,"listaUczniow","imie,nazwisko","","","",3);
// for($i=0;$i<count($tab);$i++) { 

// showRow($connect,$tab[$i],"imie,nazwisko","","DESC","",3);
// }
?>
</body>
</html>
