<?php
$pliki = glob("./*/szukany_plik.txt");

if (!empty($pliki)) {
    echo "Znaleziono plik w: " . $pliki[0];
} else {
    echo "Nie znaleziono pliku.";
}

?>