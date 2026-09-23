<?php
    $a = 3;
    $b = &$a; // Referencja do a

    print "$a\n"; // 3
    print "$b\n"; // 3

    $a = 4; 

    print "$a\n"; // 4
    print "$b\n"; // 4

    echo "<br>";

    $c = 5;
    $d = 3;

    echo "Liczby c=$c, d=$d <br>";
    echo "Suma " . ($c + $d) . "<br>";
    echo "Różnica " . ($c - $d) . "<br>";
    echo "Iloczyn ". ($c * $d) ."<br>";
    echo "Iloraz " . ($c / $d) . "<br>";
    echo "Modulo " . ($c % $d) . "<br>";
    echo "C do potęgi D " . $c ** $d . "<br>";

    echo "<br>";

    echo "<h3>Postincrement</h3>";
    $increment_value = 5;
    echo "Should be 5: " . $increment_value++ . "<br>";
    echo "Should be 6: " . $increment_value . "<br>";

    echo "<br>";

    echo "<h3>Preincrementation</h3>";
    echo "Should be 6: " . ++$increment_value . "<br>";
    echo "Should be 6: " . $increment_value . "<br>";
?>