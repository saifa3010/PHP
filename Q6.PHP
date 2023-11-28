<?php
$url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";
?>
