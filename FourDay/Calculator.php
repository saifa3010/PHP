<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
    // Retrieve the submitted numbers and operation
    $num1 = isset($_POST["num1"]) ? $_POST["num1"] : 0;
    $num2 = isset($_POST["num2"]) ? $_POST["num2"] : 0;
    $operation = isset($_POST["operation"]) ? $_POST["operation"] : '+';

    
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
            default:
                $result = 'Invalid operation';
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        input, select, button {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="calculator.php" method="post">
        <input type="text" name="num1" placeholder="Enter number 1" required>
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter number 2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php if (isset($result)): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
