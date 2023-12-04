<?php
function armstrong($n){
    $sum=0;

    $arr = str_split($n);
    
    foreach($arr as $a){
        $pow=pow($a,3);
        $sum+=$pow;
        

    }
    if($sum == $n){
        return $n ." "."is Armstrong Number";
    }
    return $n ." "."is not Armstrong Number";
}

echo(armstrong(407))
?>