<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $date    = stripslashes($_REQUEST['date']);
        $date    = mysqli_real_escape_string($con, $date);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $emailRegex = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/";
        $passRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

        if(!preg_match($emailRegex, $email)){
            echo "Invalid email";
            return;
        }

        if(!preg_match($passRegex, $password)){
            echo "Invalid password";
        }

        if($password != $_POST['confirm_password']){
            echo "passwords do not match";
        }

        if($name == '' || $email == '' || $password == ''){
            echo "Please fill in all fields";
        }
        $query    = "INSERT into `users` (username, password, email,date, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email','$date','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }

        $emailRegex = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/";
        $passRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

        if(!preg_match($emailRegex, $email)){
            echo "Invalid email";
        }

        if(!preg_match($passRegex, $password)){
            echo "Invalid password";
        }

        if($password != $_POST['confirm_password']){
            echo "passwords do not match";
        }

        if($name == '' || $email == '' || $password == ''){
            echo "Please fill in all fields";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="date" class="login-input" name="date" placeholder="Y--M--D">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type = "password" class ="login-input"id = "confirm_password" placeholder = "Confirm your password" name="confirm_pass">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>