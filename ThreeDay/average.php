<?php
function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);

    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$grade = calculateGrade($scores);
echo "Sample Output: '$grade'";
?>
