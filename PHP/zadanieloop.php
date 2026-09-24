<?php

$lista = [];
for ($licznik = 1; $licznik <= 100; $licznik++) {
    array_push($lista, $licznik);
}
echo "<pre>";

$i = 0;

while ($i < count($lista)) {
    echo $lista[$i] . "\n";
    $i++;
}
echo "</pre>";
?>