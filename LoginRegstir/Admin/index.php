<?php  


require("../db.php");
include("../auth_session.php");


$query = "SELECT * FROM users";
$result = $con -> query($query);

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
  
    <?php if(!empty($data)): ?>

        <table style="width: 900px;" class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Birth date</th>

                <th style="text-align:center" colspan="2">Action</th>
            </tr>
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['date'] ?></td>

                    
                    
                    <td style="text-align: center;">

                        <a class="btn btn-primary"style="text-decoration:none" href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a>

                        <a class="btn btn-danger" style="text-decoration: none;" href="delete.php?delete=<?php echo $row['id']; ?>" >Delete</a>
                    </td>

                </tr>
            <?php endforeach ?>
        </table>
    <?php else: ?>
     <p>No data available.</p>
    <?php endif ?>
</body>
</html>