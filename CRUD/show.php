<?php

$host = "localhost"; 
$dbname = "employee"; 
$username = "root"; 
$password = ""; 
    
$mysqli= new mysqli($host,$username,$password,$dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

   


$query = "SELECT * FROM employeedata";
$result = $mysqli -> query($query);

$data = [];

while ($row = $result->fetch_assoc()){
    $data [] = $row;
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>



<?php foreach($data as $row):?>

<div class="box-container">

    <div class="box">
       
        <h3><?php echo $row['Name']; ?></h3>
        <h3><?php echo $row['Address']; ?> </h3>
        <h3><?php echo $row['Salary']; ?> </h3>

    </div>

   
    </div>
    <?php endforeach; ?>


</body>
</html>