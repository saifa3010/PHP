<?php

$num = 1;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j <= (5 - $i)) {
            echo $num ;
        } else {
            echo $num +1;
        }
    }
    $num++;
    echo "<br>";
}

?>
