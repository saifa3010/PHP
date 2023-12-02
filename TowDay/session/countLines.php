<?php
session_start();

$_SESSION['filename']="text.txt";

$lines = file($_SESSION['filename']);

$numberOfLines = count($lines);

echo "Number of Lines: $numberOfLines";

?>
