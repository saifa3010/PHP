<?php 
session_start();


$_SESSION["colR1"]="salary of MR. A is";
$_SESSION["colR2"]="salary of MR. A is";
$_SESSION["colR3"]="salary of MR. A is";


$_SESSION["col1R1"]="1000";
$_SESSION["col2R2"]="2000";
$_SESSION["col3R3"]="3000";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border="1" >
        <tr>
            <td style="color:blue"><?php echo $_SESSION["colR1"] ?></td>
            <td><?php echo $_SESSION["col1R1"] ?></td>

        </tr>
        <tr>
        <td style="color:blue"><?php echo $_SESSION["colR2"] ?></td>
        <td><?php echo $_SESSION["col2R2"] ?></td>
        </tr>
        <tr>
        <td style="color:blue"><?php echo $_SESSION["colR3"] ?></td>
        <td><?php echo $_SESSION["col3R3"] ?></td>
        </tr>
       
    </table>
</body>
</html>