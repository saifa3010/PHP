<?php
    $visitorDataFile = 'visitors.txt'; // File to store visitor information

    // Get visitor IP address
    $visitorIP = $_SERVER['REMOTE_ADDR'];

    // Check if the visitor data file exists
    if (file_exists($visitorDataFile)) {
        // Read the visitor data from the file
        $visitorData = json_decode(file_get_contents($visitorDataFile), true);
    } else {
        // If the file doesn't exist, initialize visitor data
        $visitorData = [];
    }

    // Check if the current visitor's IP is already recorded
    if (!isset($visitorData[$visitorIP])) {
        // Record the current visitor's IP
        $visitorData[$visitorIP] = true;

        // Increment the visitor count
        $visitorCount = count($visitorData);

        // Write the updated visitor data back to the file
        file_put_contents($visitorDataFile, json_encode($visitorData));

        // Display the visitor count on the webpage
        echo "<h1>Visitor Counter</h1>";
        echo "<p>This website has had $visitorCount unique visitors.</p>";
    } else {
        // Display a message for returning visitors
        echo "<h1>Welcome Back!</h1>";
        echo "<p>You have visited this website before.</p>";
    }
?>
