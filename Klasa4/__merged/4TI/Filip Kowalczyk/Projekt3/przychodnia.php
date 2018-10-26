<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Przychodnia</title>
        <link rel="stylesheet" href="przychodnia.css">
    </head>
    <body>
        <div id="baner"><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></div>
        <div id="panel_lewy"><h3>LISTA PACJENTÓW</h3>

     
        <br>
        <br>
            <form name="konvert_var" method="post" action="pacjent.php">
<input type="number" name="input_var" />
<input type="submit"  name="send" value="Pokaż dane" />
</form>
            <h3>LEKARZE</h3>
            <ul>
            <li>pn-śr</li>
            <ol><li>Anna Kwiatkowska</li>
                <li>Jan Kowalewski</li></ol>
            <li>czw-pt</li>
            <ol><li>Krzysztof Nowak</li></ol></ul>
        </div>
        <div id="panel_prawy"><h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <p>Brak wybranego pacjenta</p></div>
        <div id="stopka"><p>utworzone przez:PESEL</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a></div>
    </body>
</html>