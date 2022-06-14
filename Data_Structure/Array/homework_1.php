<?php
$numbers = [5, 12, 17, 9, 3];

// 1. calculate the sum;
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo "Sum is $sum \n";

// calculate the average
echo "Average is " . $sum / count($numbers) . "\n";

// calculate the max
$max = 0;
foreach ($numbers as $number) {
    if ($max < $number) {
        $max = $number;
    }
}
echo "Max is $max \n";

// calculate the min
$min = $numbers[0];
foreach ($numbers as $number) {
    if ($min > $number) {
        $min = $number;
    }
}
echo "Min is $min";
