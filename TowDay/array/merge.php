<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultArray = array_merge($array1, $array2);
echo "Merged Array: ";
echo"<pre>";
print_r($resultArray);
echo"</pre>"
?>
