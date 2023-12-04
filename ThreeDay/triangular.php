<?php

function generateFloydsTriangle($n) {
    $currentNumber = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $currentNumber . ' ';
            $currentNumber++;
        }
        echo "<br>";
    }
}

$n = 5;
generateFloydsTriangle($n);

?>
