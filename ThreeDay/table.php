<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>

<table border="1" cellpadding="3px" cellspacing="0px">
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= 5; $j++) {
            $result = $i * $j;
            echo "<td>{$i} * {$j} = {$result}</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
