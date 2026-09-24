<?php

for($i=0; $i<10; $i++) {
    if($i == 5) {
        continue; // Przechodzi do następnej iteracji
    }
    echo "Liczba: $i <br>";
}

echo "Koniec pętli";

?>