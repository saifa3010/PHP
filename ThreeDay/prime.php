<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$testNumber = 17;

if (isPrime($testNumber)) {
    echo "$testNumber is a prime number.";
} else {
    echo "$testNumber is not a prime number.";
}
?>
