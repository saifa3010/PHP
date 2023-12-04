<?php

$output = '';

for ($i = 1; $i <= 10; $i++) {
    $output .= $i;
    if ($i < 10) {
        $output .= '-';
    }
}

echo $output;

?>
