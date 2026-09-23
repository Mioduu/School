<?php
    function incrementation() {
        static $licznik = 0;
        echo $licznik . "<br>";
        $licznik++;
    }

    incrementation();
    incrementation();
    incrementation();
?>