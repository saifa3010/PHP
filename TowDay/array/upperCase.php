<?php
function convertToUpperCase($array) {
    $resultArray = array_map('strtoupper', $array);
    return $resultArray;
}
$colors = array("red", "blue", "white", "yellow");
$result = convertToUpperCase($colors);
echo "<pre>";
print_r($result);
echo "</pre>"
?>
