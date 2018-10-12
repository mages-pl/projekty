<?php

//wczytanie ogryginalnego pliku json
$getOldJson = file_get_contents('players.json');
$dataFromJson = json_decode($getOldJson);

//echo count($dataFromJson->uczniowie);
echo 'PKT';
print_r(explode(',', $_POST['punkty']));

echo 'LVL';
print_r(explode(',', $_POST['level']));

$data = '{
    "uczniowie": [';

for ($i = 0; $i < count($dataFromJson->uczniowie); ++$i) {
    $data .= '{
            "nr_dziennika": "'.($i + 1).'",
            "imie": "'.$dataFromJson->uczniowie[$i]->imie.'",';
    if ($i == $_POST['uczen']) {
        $data .= '"level": "'.$_POST['level'].'",
            "punkty": "'.$_POST['punkty'].'",
            "oceny": "'.$_POST['oceny'].'"
            ';
    } else {
        $data .= '"level": "'.$dataFromJson->uczniowie[$i]->level.'",
            "punkty": "'.$dataFromJson->uczniowie[$i]->punkty.'",
            "oceny": "'.$dataFromJson->uczniowie[$i]->oceny.'"
            ';
    }

    if ($i == count($dataFromJson->uczniowie) - 1) {
        $data .= '}';
    } else {
        $data .= '},';
    }
}
$data .= '   ]
}';

 //print_r($dataFromJson->uczniowie[0]->level); //
  //  $newJsonString = json_encode($data);
  //chmod('./players.json', 0777);
 file_put_contents('./players.json', $data);
