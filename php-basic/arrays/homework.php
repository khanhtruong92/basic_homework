<?php
// $a = [3, 4, 1, 19, 20, 99];
// // count($a);
// $sum = 0;
// foreach ($a as $value) {
//     $sum += $value;
// }

// $average = $sum / count($a);
// echo $average;

//3.
// $a = [
//     [1, 2, 3, 4],
//     [5, 6, 7, 8],
//     [9, 10, 11, 12]
// ];

// echo array_values($a[1]);
// echo array_sum($a[0]);
// echo array_sum($a[1]);

// $count = count($a);
// $total = 0;
// for ($i = 0; $i < $count; $i++) {
//     $total += array_sum($a[$i]);
// }
// echo $total;

// 5.
// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// foreach ($a as $value) {
//     echo $value . "\n";
// }

//4.
$a = [34, 2, 34, 1, 12, 16, 2, 8, 2];
$b = array_count_values($a);
arsort($b);

// foreach ($b as $key => $c) {
//     echo $key . "=>" . $c . "<br>";
// }

echo "Number " . key($b) . " most frequent element is " . reset($b) . " times";
