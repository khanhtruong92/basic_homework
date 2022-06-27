<?php
namespace Algorithm\Bubble;

include_once 'bubble.php';

$array = [8, 22, 7, 9, 31, 5, 13];

\Algorithm\Bubble\bubbleSort($array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

//echo 5 7 8 9 13 22 31
