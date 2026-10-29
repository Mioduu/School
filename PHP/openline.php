<?php
$uchwyt = fopen('plik.txt', 'r');

if ($uchwyt) {
    while (($linia = fgets($uchwyt)) !== false) {
        echo $linia;
    }
    fclose($uchwyt);
}

?>