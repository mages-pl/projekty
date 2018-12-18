<meta charset="utf-8"/>
<style type="text/css">
label {
    display: table;
}
table td:last-child { 
    vertical-align:bottom;
}
</style>
<?php 
 
 if(!isset($_POST['waluta'])) { 
     $walutaKodAPI = 'USD'; 
 } else { 
    $walutaKodAPI = $_POST['waluta']; 
 }

 $nbp = curl_init(); 
curl_setopt($nbp,CURLOPT_URL,"http://api.nbp.pl/api/exchangerates/rates/A/".$walutaKodAPI."/?format=json");
 
 curl_setopt($nbp,CURLOPT_RETURNTRANSFER,1);
 print_r(json_decode(curl_exec($nbp),true));

 $getCurrency = (json_decode(curl_exec($nbp),true));
 echo $getCurrency['currency'];
 echo $getCurrency['rates'][0]['mid'];
 
 ?> 

 <form method="POST">
 <h3>Wymień PLN</h3>
 <table>
 <tr>
 <td>
 <label>Ile PLN chcasz wymienić</label>
<input type="text" name="pln"/> <b>PLN</b>
</td>
<td style="vertical-align: bottom;">
<input type="button" id="exchange" value="<=>" />
</td>
<td>
<label>Waluta</label>
<input type="hidden" name="rate" value="<?php echo $getCurrency['rates'][0]['mid']; ?>" />
<select name="waluta">
<?php 
$walutyKod = ["USD","AUD","CAD","GBP","EUR","CHF"];
$walutyNazwy = ["Dolar amerykański","Dolar australisjki","Dolar kanadyjski","Szterling","Euro","Frank szwajcarski"];


for($z=0;$z<count($walutyKod);$z++) {  
    if($walutaKodAPI == $walutyKod[$z]) { 
        echo '<option selected="selected" value="'.$walutyKod[$z].'">'.$walutyNazwy[$z].'</option>';
    } else { 
echo '<option value="'.$walutyKod[$z].'">'.$walutyNazwy[$z].'</option>';
}
}
?>
</select>
</td>
<td>
<label>Wartość</label>
<?php 
if(isset($_POST['zapisz'])) { 
    $wynik = $_POST['pln'] /  $_POST['rate']; 

   // echo $wynik; 

} else {
    $wynik = '0';
}
?>

<input type="text" disabled value="<?php echo $wynik; ?>"  name="kupiono"/> <b><?php echo $walutaKodAPI; ?></b>
</td>
<td>

<input type="submit" name="zapisz" value="Przelicz"/>
</td>
</tr>
</table>

 </form>
 <script type="text/javascript"> 

 </script>
