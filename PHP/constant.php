<?php

$owoce = array("Jabłko"=>2.49, "Pomarańcza"=>3.50, "Truskawka"=>5.00);
print_r($owoce);
echo "<br>";
$kiwi = array("Kiwi"=>5);
$owoce = array_merge($kiwi, $owoce);
print_r($owoce);
echo "<br>";
$liczi = array("Liczi"=>10);
$owoce = array_merge($owoce, $liczi);
print_r($owoce);

echo "<br>";
array_splice($owoce, 2, 1);
print_r($owoce);
?>