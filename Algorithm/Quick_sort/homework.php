<?php
namespace Algorithm\QuickSort;

include_once 'quickSort.php';

function finK($k, $arr1, $arr2)
{
    // lưu các element của 2 mảng thành phần vào mảng $sumArray
    // index của mảng là sum của 2 element từ mảng thành phần
    $sumArray = [];
    for ($i = 0; $i < count($arr1); $i++) {
        foreach ($arr2 as $value) {
            $sum = $arr1[$i] + $value;
            $sumArray[$sum] = $arr1[$i] . ', ' . $value;
        }
    }
    
    // cắt lấy số lượng elment cần thiết và in ra theo yêu cầu đề bài
    $result = array_slice($sumArray, 0, $k);
    echo "$k pairs with smallest sums is: ";
    foreach ($result as $value) {
        echo '[' . $value . "] \n";
    }
}

$array1 = [11, 7, 1];
$array2 = [4, 6, 2];

\Algorithm\QuickSort\quickSort($array1, 0, count($array1) - 1);
\Algorithm\QuickSort\quickSort($array2, 0, count($array2) - 1);

finK(3, $array1, $array2);
