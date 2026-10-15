<?php

$tablica = [8, 5, 12, 6, 9, 15, 21, 2, 7, 6, 22];


function reverse($tablica) {
    $odwrocona_tablica = [];
    for($i = (count($tablica) - 1); $i >= 0; $i--) {
        $odwrocona_tablica[] = $tablica[$i];
    }
    return $odwrocona_tablica;
}

$wynik = reverse($tablica);

print_r($wynik);

?>