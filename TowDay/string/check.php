<?php 
$str ="I am a full stack developer at orange coding academy’";
$arrStr=explode(" ",$str);

$check="orange";
foreach ($arrStr as $arr){
    if ($check == $arr){
        echo true;
    }
    echo false;
}

?>