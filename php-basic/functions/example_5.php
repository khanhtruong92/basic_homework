<?php
function sum($a, $b)
{
    $sum = $a + $b;
    // return sum of $a and $b
    return $sum;
}

// output return value to screen
echo sum(10, 15);

// assign return value from function to a varialble
$sum = sum(100, 200);
echo "\n $sum";
// echo sum(100, 200);
