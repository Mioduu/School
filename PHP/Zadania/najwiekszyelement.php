<?php

$liczby = [8, 5, 12, 6, 9, 15, 21, 2, 7, 6, 22];
$najwieksza_liczba = $liczby[0];
$aktualna_liczba = 0;
$i = 0;
$pozycja_max = 0;

for($i; $i < count($liczby); $i++) {
    $aktualna_liczba = $liczby[$i];
    echo "Sprawdzane liczby: $aktualna_liczba, $najwieksza_liczba <br>";
    if($aktualna_liczba > $najwieksza_liczba) {
        $najwieksza_liczba = $aktualna_liczba;
        $pozycja_max = $i;
    }
    echo "Aktualna najwieksza liczba to: $najwieksza_liczba <br>";
    echo "Pozycja max to: $pozycja_max <br>";
}

echo $najwieksza_liczba . "<br>";
echo $pozycja_max;

// Absolutny syf i tragedia ale nie chce mi sie
?>