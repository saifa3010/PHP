<?php  

function vote($n){
    if($n>=18){
        return "is eligible to vote";
    }
    return "is no eligible to vote";

}
echo vote(18)

?>