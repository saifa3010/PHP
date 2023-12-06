<?php 

$mysql=mysqli_connect('localhost',"root","","employee");

$id=$_GET['edit'];
$query=mysqli_query($mysql,"SELECT * from employeedata where id= '$id'");
$row=mysqli_fetch_assoc($query);




if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];

   
    
        $query=mysqli_query($mysql,"UPDATE employeedata SET id='$id',name='$name',Address='$address',
        Salary='$salary' WHERE id=$id ");
        if($query){
            header('location:index.php');
        }
   

    
    

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

<link rel="stylesheet" href="style.css">

</head>



<body>


<div style="margin-left: 500px;margin-top:50px;">

 <form method="POST">

 <div class="mb-3">
    <label style=" font-size:20px;"> Name</label>
    <input style="width: 300px;font-size:20px" type="text"  name="name" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
 </div>


<div class="mb-3">
    <label style=" font-size:20px;">Address</label>
    <input style="width: 300px; font-size:20px;" type="text"  name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>


<div class="mb-3">
    <label style=" font-size:20px;">salary</label>
    <input style="width: 300px;font-size:20px" type="text" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

        <div ><input class="btn btn-primary" style="width: 300px;" type="submit" name="submit" value="Edit"></div>

    </form>
    
</div>
</body>
</html>


?>