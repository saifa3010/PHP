<?php
$numericString = '085119';

$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

$timeFormat = "$hours:$minutes:$seconds";

echo  $timeFormat;
?>
