<?php

function season($t){
    if ($t>=20){
        return "It is summertime!";
    }
    else{
        return "It is wintertime!";
    }
}
echo season(18)
?>