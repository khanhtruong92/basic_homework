<?php
// $numbers = [12, 4, 9, 5];

// $sum = 0;
// foreach ($numbers as $key => $value) {
//     $sum += $value;
// }

// echo "Sum of elements in the array: $sum";

$a = [1, 2, 3, 4, 5, 6, 7, 8, 19, 10];
foreach ($a as $key => $value) {
    if ($value % 2 === 1) {
        echo $value . "\n";
    }
}
