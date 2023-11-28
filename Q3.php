<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
$name = $_POST['name'];
echo "<h3>$name </h3>";
?>
</body>
</html>
