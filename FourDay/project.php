<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Home</title>
</head>
<body>
    <h1>User List</h1>
    
    <?php
        $users = [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Smith'],
        ];

        foreach ($users as $user) {
            echo '<p><a href="profile.php?id=' . $user['id'] . '">' . $user['name'] . '</a></p>';
        }
    ?>
</body>
</html>
