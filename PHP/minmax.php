<?php

function minMax() {

    $numbers = [1,8,12,5,3,9,16,2,6];

    $minValue = min($numbers);
    $maxValue = max($numbers);
    $minNumPos = array_search($minValue, $numbers);
    $maxNumPos = array_search($maxValue, $numbers);

    $temp = $numbers[$minNumPos];

    $numbers[$minNumPos] = $numbers[$maxNumPos];
    $numbers[$maxNumPos] = $temp;


    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
}

minMax();

?>