<?php
function sum($a, $b) 
{
    $sum = $a + $b;
    echo "$a + $b = $sum \n";
}

// call function by passing value

sum(1, 2);

// call function by passing variables
$x = 5;
$y = 10;
sum($x, $y);
