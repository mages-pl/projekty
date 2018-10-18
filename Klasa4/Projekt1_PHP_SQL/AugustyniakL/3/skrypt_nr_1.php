<?php
    $zapytanie1 = mysqli_query($polaczenie, "SELECT `id`, `imie`, `nazwisko` FROM `pacjenci`");
    while($row = mysqli_fetch_array($zapytanie1)) {
        echo "<span>".$row['id']." ".$row['imie']." ".$row['nazwisko']."</span><br/>";
    }
?>