<?php   

$host = "localhost"; 
$dbname = "employee"; 
$username = "root"; 
$password = ""; 

$mysqli= new mysqli($host,$username,$password,$dbname);

if(isset($_GET["delete"])){
    $id=$_GET["delete"];
    $delete=mysqli_query($mysqli,"DELETE FROM employeedata WHERE ID=$id");

    if($delete){
        header('location:index.php');
    }
}






?>