<?php
function findNumbersGreaterThanTen(...$numbers) 
{
    $a = [];
    // $check = true;
    foreach ($numbers as $number) {
        if ($number <= 10) {
            // $check = false;
        } else {
            $a[] = $number;
        }
    }
    print_r($a);
}

$a3 = findNumbersGreaterThanTen(15, 16, 17, 18, 19, 20);
$a1 = findNumbersGreaterThanTen(4, 100, 10, 12);
// echo $a;
