

<?php 

class Sort{
    public function ArraySort($arr){
        sort($arr);

        return $arr;
    }
}

$arr = array(11, -2, 4, 35, 0, 8, -9);

$a= new Sort;
$result=$a->ArraySort($arr);
print_r($result);

?>