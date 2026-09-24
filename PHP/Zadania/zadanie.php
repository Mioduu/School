<?php

$owoce = array("Jabłko"=>"2,49", "Pomarańcza"=>"3,50", "Truskawka"=>"5,00");
print_r($owoce);
$kiwi = array("Kiwi"=>"5");
array_splice($owoce, 1, 1, 0, $kiwi);
?>