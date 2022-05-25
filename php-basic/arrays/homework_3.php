<?php
$a = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

$count = count($a);
$sum = 0;
for ($i = 0; $i < $count; $i++) {
    $sum += array_sum($a[$i]);
}

echo $sum;
