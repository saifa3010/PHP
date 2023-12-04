<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Perform the selected operation
    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            // Check if the divisor is not zero to avoid division by zero error
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        default:
            $result = 'Invalid operation';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" required>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" required>

        <label for="operation">Operation:</label>
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php
    // Display the result if it is set
    if (isset($result)) {
        echo '<h3>Result:</h3>';
        echo '<p>' . $result . '</p>';
    }
    ?>
</body>
</html>
