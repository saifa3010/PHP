<?php 

function sum($x,$y){
    if($x == $y){
        return ($x+$y)*3;
    }
    else{
        return $x+$y;
    }
   
}
echo sum(2,2);
?>