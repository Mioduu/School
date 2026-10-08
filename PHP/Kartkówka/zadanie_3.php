<?php
$tablica = [1,2,3,4];
$suma = 0;

for($i = 0; $i < count($tablica); $i++) {
    $suma += $tablica[$i];
}

echo "Suma elementów tablicy: " . $suma;
?>