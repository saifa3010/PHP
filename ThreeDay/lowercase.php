<?php
function lowercase($str) {
    return ctype_lower($str);
}

$testString = "exDamplestring"; 

if (lowercase($testString)) {
    echo "Your String is Ok" ;
} else {
    echo "Your String is not Ok";
}
?>
