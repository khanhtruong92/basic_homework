<?php
namespace Algorithm\SampleExercise;

include_once '../Merge_Sort/mergeSort.php';

// Do có thể sử dụng lại sắp xếp từ file ở bài merge sort
// Lên ta sẽ dùng lại code đó và trả về giá trị ở vị trí được yêu cầu
function kthSmallest($arr, $k)
{
    $arr = \Algorithm\MergeSort\mergesort($arr);
    return $arr[$k - 1];
}

$array = [7, 10, 4, 3, 20, 15];
echo "K'th smallest element is " . kthSmallest($array, 3);
