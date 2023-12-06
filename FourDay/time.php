<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Requested Time</title>
</head>
<body>
    <h1>Welcome to the Page</h1>
    
    <?php
        $currentTime = date("Y-m-d H:i:s");

        echo "<p>Page requested at: $currentTime</p>";
    ?>
</body>
</html>
