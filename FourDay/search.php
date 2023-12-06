<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Search Engine</title>
</head>
<body>
    <h1>Simple Search Engine</h1>
    <form action="#" method="post">
        <label for="url">Enter URL:</label>
        <input type="text" name="url" id="url" required>
        <input type="submit" value="GO">
    </form>
</body>
</html>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = isset($_POST["url"]) ? $_POST["url"] : "";

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: " . $url);
    } 
    else {
        echo "Invalid URL. Please enter a valid URL.";
    }
}

?>
