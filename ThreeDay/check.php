<?php 

function check($n){
    if($n>0){
        return "Positive";
    }
    elseif($n<0){
        return "Negative";
    }
    else{
        return "Zero";
    }
}

echo check(5)
?>