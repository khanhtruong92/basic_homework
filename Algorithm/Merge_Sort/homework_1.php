<?php
namespace Algorithm\MergeSort;

include_once 'mergeSort.php';

$arr = array(4, 11, 13, 6, 2);

$arr = \Algorithm\MergeSort\mergesort($arr);

$count = count($arr);
$sum = $arr[$count - 1] + $arr[$count - 2];
echo "The sum of the two largest number in array is: $sum";
