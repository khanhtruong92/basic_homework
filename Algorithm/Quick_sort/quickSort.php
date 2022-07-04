<?php
namespace Algorithm\QuickSort;

function partition(&$array, $left, $right) 
{
    $pivot = $array[$right];
    $i = $left;

    for ($j = $left; $j < $right; $j++) {
        if ($array[$j] < $pivot) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
        }
    }

    $temp = $array[$i];
    $array[$i] = $array[$right];
    $array[$right] = $temp;
    return $i;
}

function quickSort(&$array, $left, $right) 
{
    if ($left < $right) {
        $pivot = partition($array, $left, $right);
        quickSort($array, $left, $pivot - 1);
        quickSort($array, $pivot, $right);
    }
}
