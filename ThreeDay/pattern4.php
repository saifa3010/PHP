<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }
    echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }
    echo "<br>";
}
