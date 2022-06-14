<?php
$arr = array(
    [5, 12, 17, 9, 13],
    [13, 4, 8, 14, 1],
    [9, 5, 3, 17, 21]
);

$numbers = [];
foreach ($arr[0] as $number) {
    $numbers[] = $number;
}
foreach ($arr[1] as $number) {
    $numbers[] = $number;
}
foreach ($arr[2] as $number) {
    $numbers[] = $number;
}

// print_r($numbers);

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
