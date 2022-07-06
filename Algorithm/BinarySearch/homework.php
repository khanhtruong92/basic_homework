<?php
namespace Algorithm\BinarySearch;

function insertionSortUseBinarySearch(&$arr)
{
    // Phần của insertion sort
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];

        $right = $i - 1;
        $left = 0;

        // Phần của binary search
        // Sử dụng binary search để tìm kiếm index đúng của $key
        // Giá trị của $left chính là index cần tìm
        while ($left <= $right) {
            $m = floor(($left + $right) / 2);

            if ($arr[$m] < $key) {
                $left = $m + 1;
            } else {
                $right = $m - 1;
            }
        }

        // Phần của insertion sort
        for ($j = $i; $j > $left; $j--) {
            $arr[$j] = $arr[$j - 1];
        }
        $arr[$left] = $key;
    }
    return $arr;
}

$arr = [37, 23, 0, 17, 12, 72, 31, 46, 100, 88, 54]; 
$arr = insertionSortUseBinarySearch($arr);

echo implode(" ", $arr);
