<?php
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

swap($x, $y);

echo "After swapping: x = $x, y = $y";
?>
