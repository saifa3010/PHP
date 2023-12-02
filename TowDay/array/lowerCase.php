<?php
function convertToLowerCase($array) {
    $resultArray = array_map('strtoLower', $array);
    return $resultArray;
}
$colors = array("red", "blue", "white", "yellow");
$result = convertToLowerCase($colors);
echo "<pre>";
print_r($result);
echo "</pre>"
?>
