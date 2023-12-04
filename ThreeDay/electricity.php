<?php
function calculateElectricityBill($units) {
    $totalBill = 0;
    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } 
    elseif ($units <= 150) {
        $totalBill = 50 * 2.50 + ($units - 50) * 5.00;
    } 
    elseif ($units <= 250) {
        $totalBill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } 
    else {
        $totalBill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }

    return $totalBill;
}

$unitsConsumed = 300; 
$billAmount = calculateElectricityBill($unitsConsumed);

echo "$unitsConsumed units: $billAmount JOD";
?>
