<?php

$text = "Orange Coding Academy";
$t=strtolower($text);
$countC = substr_count($t, 'c');

echo "The number of 'c' characters in the text is: $countC";

?>
