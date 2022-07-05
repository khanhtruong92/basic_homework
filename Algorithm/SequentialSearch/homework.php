<?php
namespace Algorithm\SequentialSearch;

function countNumber($arr, $x)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $x) {
            $count++;
        }
    }
    echo "Element $x is existing $count times";
}

$array = [10, 20, 80, 30, 10, 50, 10, 100, 10, 10];
$x = 10;

countNumber($array, $x);
