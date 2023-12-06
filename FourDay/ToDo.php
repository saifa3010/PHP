<?php
session_start();

// Initialize tasks array in the session if not set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["addTask"])) {
        // Add a new task to the list
        $task = isset($_POST["task"]) ? trim($_POST["task"]) : '';
        if (!empty($task)) {
            $_SESSION['tasks'][] = $task;
        }
    }
}

if (isset($_GET["complete"])) {
    // Mark a task as completed
    $completedTask = urldecode($_GET["complete"]);
    $_SESSION['tasks'] = array_diff($_SESSION['tasks'], [$completedTask]);
}

if (isset($_GET["delete"])) {
    // Delete a task
    $deletedTask = urldecode($_GET["delete"]);
    $_SESSION['tasks'] = array_diff($_SESSION['tasks'], [$deletedTask]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        input, button {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>To-Do List</h1>

    <form action="#" method="post">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit" name="addTask">Add Task</button>
    </form>

    <h2>Tasks:</h2>
    <ul>
        <?php
        // Display tasks from the session
        foreach ($_SESSION['tasks'] as $task) {
            echo "<li>$task <a href='index.php?complete=" . urlencode($task) . "'>[Complete]</a> <a href='index.php?delete=" . urlencode($task) . "'>[Delete]</a></li>";
        }
        ?>
    </ul>
</body>
</html>
