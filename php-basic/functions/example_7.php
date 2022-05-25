<?php

function sum(...$numbers) 
{
    $sum = 0;
    foreach($numbers as $number) {
        $sum += $number;
    }
    // echo "$sum\n";
    echo 'tung dep trai';
    return "$sum\n";
}

// $a1 = sum(8,9,10);
// $sum = ['bon'=>'tung', 'nam'=>'khanh', 'sau'=>'tu'];
// echo implode(',', $sum);
// echo $sum['bon'];
// echo count($sum);
// print_r($sum);
echo sum(1);
// echo sum(1, 2);
// echo sum(1, 2, 5);
// echo sum(2, 4, 9, 4, 1);
