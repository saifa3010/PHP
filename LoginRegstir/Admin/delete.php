<?php   

require("../db.php");
require("../auth_session.php");

if(isset($_GET["delete"])){
    $id=$_GET["delete"];
    $delete=mysqli_query($con,"DELETE FROM users WHERE id=$id");

    if($delete){
        header('location:index.php');
    }
}






?>