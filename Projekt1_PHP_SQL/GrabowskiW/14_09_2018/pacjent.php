<?php
    include "skrypt.php";
?><!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Przychodnia</title>
    <link rel="stylesheet" type="text/css" href="przychodnia.css"/>
</head>
<body>
    <div class="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div class="panel_lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php include "skrypt_nr_1.php"; ?>
        <br/>
        <br/>
        <form action="pacjent.php" method="post">
            <label>Podaj id:</label><br/>
            <input type="number" name="id" id="id"/>
            <input type="text" name="name" id="name"/>
            <button type="submit" name="pokaz">Pokaż dane</button>
        </form>
        <h3>LEKARZE</h3>
        <ul>
            <li>pn - śr
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowalewski</li>
                </ol>
            </li>
            <li>czw - pt
                <ol>
                    <li>Krzysztof Nowak</li>
                </ol>
            </li>
        </ul>
    </div>
    <div class="panel_prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <?php include "skrypt_nr_2.php";?>
    </div>
    <div class="stopka">
        <p>utworzone przez: 00000000000</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>