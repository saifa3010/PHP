<?php 

$array1 = array( 2, 0, 10, 12, 6);
$lower=$array1[0];
foreach($array1 as $arr){
    if ($arr !=0 and $lower >$arr){
        $lower=$arr;
        
    }

}
echo $lower

?>