
<?php

$string1 = 'dragonball';
$string2 = 'dragonboll';

for ($i=0; $i<strlen($string1);$i++){
    if($string1[$i] != $string2[$i] ){
        echo "First difference between two strings at position 7: $string1[$i] vs $string2[$i]";
    }
}
?>