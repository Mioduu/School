<?php

if ($_POST["vehicle1"]) {
    echo "Pierwszy checkbox: " . $_POST["vehicle1"] "<br>";
} else {
    echo "Pierwszy checkbox: <br>";
}

if ($_POST["vehicle2"]) {
    echo "Drugi checkbox: " . $_POST["vehicle2"];
} else {
    echo "Drugi checkbox: <br>";
}

?>