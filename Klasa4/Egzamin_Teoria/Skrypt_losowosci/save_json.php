<?php

//wczytanie ogryginalnego pliku json
$getOldJson = file_get_contents('players.json');
$dataFromJson = json_decode($getOldJson);

echo 'HEJ';
//print_r($dataFromJson);
echo 'Wartosc'.$dataFromJson[0].imie;
// $newJsonString = json_encode($data);
// file_put_contents('players.json', $newJsonString);
