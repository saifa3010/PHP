<?php
    $counterFile = 'counter.txt'; // File to store the counter

    // Check if the counter file exists
    if (file_exists($counterFile)) {
        // Read the current count from the file
        $count = (int) file_get_contents($counterFile);
        // Increment the count
        $count++;
    } else {
        // If the file doesn't exist, start the count at 1
        $count = 1;
    }

    // Write the updated count back to the file
    file_put_contents($counterFile, $count);

    // Display the count on the webpage
    echo "<h1>Website Counter</h1>";
    echo "<p>This website has been visited $count times.</p>";
?>
