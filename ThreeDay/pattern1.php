<?php

$char = 'A';

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= (5 - $i)) {
            echo "$char ";
        } else {
            echo chr(ord($char) + $i - 1) . ' ';
        }
    }
    echo "<br>";
}

?>
