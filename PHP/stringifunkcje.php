<?php

    // Counts bytes
    echo strlen("Hello World!"); // 12

    echo "<br>";

    echo strlen("Łódź"); // 7

    echo "<br>";

    // Counts letters not bytes
    echo mb_strlen("Łódź"); // 4

    echo "<br>";

    // Counts words
    echo str_word_count("Hello World!"); // 2

    echo "<br>";

    echo str_replace("World", "Dolly", "Hello World!");

    echo "<br>";

    echo strpos("Hello Dolly!", "Dolly");
?>