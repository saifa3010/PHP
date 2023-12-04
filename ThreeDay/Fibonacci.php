<?php

function fibonacci($n) {
    $fibonacciSequence = array();

    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            $fibonacciSequence[] = 0;
        } elseif ($i == 1) {
            $fibonacciSequence[] = 1;
        } else {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
    }

    return $fibonacciSequence;
}

$n = 10;
$result = fibonacci($n);

echo "Fibonacci sequence of $n numbers: " . implode(', ', $result);

?>
