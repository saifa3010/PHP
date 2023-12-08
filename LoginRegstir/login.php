<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('db.php');
session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);    
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `users` WHERE username='$username' 
    AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con, $query));

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;

            // Check user role and redirect accordingly
            if ($user['role'] == 0) {
                header("Location: dashboard.php");
                exit();
            } elseif ($user['role'] == 1) {
                header("Location: Admin/index.php");
                exit();
            } else {
                // Handle other roles or show an error message
                echo "<div class='form'>
                      <h3>Invalid User Role.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                      </div>";
            }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
} else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
<?php
}
?>

</body>
</html>