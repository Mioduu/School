<?php

$liczby = [8, 5, 12, 6, 9, 15, 21, 2, 7, 6, 22];

function maxLiczba($liczby) {
    $najwieksza_liczba = $liczby[0];
    $pozycja_max = 0;

    for ($i = 0; $i < count($liczby); $i++) {
        $aktualna_liczba = $liczby[$i];

        echo "Sprawdzane liczby: $aktualna_liczba, $najwieksza_liczba <br>";

        if ($aktualna_liczba > $najwieksza_liczba) {
            $najwieksza_liczba = $aktualna_liczba;
            $pozycja_max = $i;
        }

        echo "Aktualna największa liczba to: $najwieksza_liczba <br>";
        echo "Pozycja max to: $pozycja_max <br><br>";
    }

    echo "Największa liczba: " . $najwieksza_liczba . "<br>";
    echo "Pozycja maksimum: " . $pozycja_max;
}

maxLiczba($liczby);

?>