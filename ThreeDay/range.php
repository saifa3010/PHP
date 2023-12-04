<?php

function rangee($n){
    if ($n <= 20 && $n >=50){
        return true;
    }
    return false;
}
echo rangee(50);

?>