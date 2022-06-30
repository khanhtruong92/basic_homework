<?php
namespace Algorithm\InsertionSort;

// sắp xếp mảng tăng dần,
// sử dụng Insert sort bằng cách đệ quy
function recuresiveInsertionSort(&$arr, $n)
{
    // Thiết lập điều kiện dừng
    // $n là số lượng của mảng
    // $n = 2 là giá trị cuối cùng cần xét
    // vì lúc này ta đã sét đến phần tử $key = $arr[$n - 1] = $arr[0]
    if ($n < 2) {
        return;
    }

    $j = $n - 1;
    $key = $arr[$n - 2];

    // dồn phần tử
    while ($j < count($arr) && $key > $arr[$j]) {
        $arr[$j - 1] = $arr[$j];
        $j++;
    }
    
    // đổi chỗ phần tử vào đúng vị trí
    $arr[$j - 1] = $key;

    recuresiveInsertionSort($arr, $n - 1);
}

// cho một mảng chưa sắp xếp
$array = [6, 4, 8, 1, 3];
recuresiveInsertionSort($array, count($array));

foreach ($array as $value) {
    echo $value . " ";
}
