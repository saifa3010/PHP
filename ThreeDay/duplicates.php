<?php 

function array1($arr) {
    $x = array_unique($arr);
    return $x;
}

$a = [2, 4, 7, 4, 8, 4];

print_r(array1($a));

?>