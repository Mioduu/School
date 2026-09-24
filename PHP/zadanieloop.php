<?php

$lista = [];
for ($licznik = 1; $licznik <= 100; $licznik++) {
    array_push($lista, $licznik);
}
echo "<pre>";
print_r($lista); 
echo "</pre>";
?>