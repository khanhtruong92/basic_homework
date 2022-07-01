<?php
namespace Algorithm\MergeSort;

include_once 'mergeSortBigtoSmall.php';

$array = [7, 10, 4, 3, 20, 15];
$k = 3;
$array = \Algorithm\MergeSort\mergesort($array);
echo "The K element is: " . $array[$k - 1];
