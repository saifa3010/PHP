<?php  

$host = "localhost"; 
$dbname = "employee"; 
$username = "root"; 
$password = ""; 

// $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$mysqli= new mysqli($host,$username,$password,$dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



// if ($_SERVER["REQUEST_METHOD"]=="Post" && isset($_POST["remove"])){

//     $remove = $_POST["remove"];

//     $rem = $mysqli -> prepare("DELETE FROM employeedata WHERE ID = ?");

//     $rem -> bind_param("i",$remove);

//     $rem -> execute();
//     // $rem -> close();
// }

// if($_SERVER["REQUEST_METHOD"]=="Post" && isset($_POST['delete'])){
//     $id=$_POST['delete'];
//     $delete=mysqli_query($mysqli,"DELETE FROM employeedata WHERE ID=$id");
// }


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>
    <form action="insert.php">
    <button style="margin:10px;" class="btn btn-primary">ADD</button>
    </form>

    <?php if(!empty($data)): ?>

        <table style="width: 500px;" class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th style="text-align:center" colspan="2">Action</th>
            </tr>
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><?php echo $row['Salary'] ?></td>

                    
                    
                    <td style="text-align: center;">
                    <a class="btn btn-secondary"style="text-decoration:none" href="show.php?show=<?php echo $row['ID']; ?>">Show</a>

                        <a class="btn btn-primary"style="text-decoration:none" href="edit.php?edit=<?php echo $row['ID']; ?>">Edit</a>

                        <a class="btn btn-danger" style="text-decoration: none;" href="delete.php?delete=<?php echo $row['ID']; ?>" >Delete</a>
                    </td>

                </tr>
            <?php endforeach ?>
        </table>
    <?php else: ?>
     <p>No data available.</p>
    <?php endif ?>
</body>
</html>