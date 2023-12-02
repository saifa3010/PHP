<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];

    $resultToUpper = strtoupper($inputString);

    $resultToLower = strtolower($inputString);

    $resultFirstLetterUppercase = ucfirst($inputString);

    $resultCapitalizeEachWord = ucwords($inputString);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="inputString">Enter a string: </label>
    <input type="text" name="inputString">
    <button type="submit">Submit</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h2>Results:</h2>
    <p>Task a: Convert to uppercase: <?php echo $resultToUpper; ?></p>
    <p>Task b: Convert to lowercase: <?php echo $resultToLower; ?></p>
    <p>Task c: Make the first letter uppercase: <?php echo $resultFirstLetterUppercase; ?></p>
    <p>Task d: Make the first letter of each word capitalized: <?php echo $resultCapitalizeEachWord; ?></p>
<?php endif; ?>
