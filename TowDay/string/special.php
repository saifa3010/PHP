<?php
$str='\"\1+2/3*2:2-3/4*3';
$re = preg_replace('/[^0-9]/', ' ', $str);
echo $re;

?>