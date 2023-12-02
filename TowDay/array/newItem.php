<?php
$arr = array(1,2,3,4,5);

$newItem = "$";

$insertPosition = 3;

array_splice($arr, $insertPosition, 0, $newItem);

print_r($arr);
?>
