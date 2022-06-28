<?php
namespace Algorithm\SelectionSort;

// B1 xác định điểm dừng : khi đến phần tử cuối cùng
// B2 : - so sánh giá trị nhỏ nhất (gián giá trị đầu tiên) với các phần tử tiếp theo trong mảng
//        nếu giá trị đó nhỏ hơn thì gán min bằng số đó
//      - gọi lại hàm(thực hiện đệ quy)

// 3 chỉ số chọn gồm: mảng, chỉ số chỉ định, số lượng phần tử trong mảng
function recursiveSelectionSort(&$arr, $i, $n)
{
    // Xác định điểm dừng khi index được gọi đến phần tử cuối cùng
    if ($i == $n - 1) {
        return;
    }

    // Gán giá trị chỉ số của phần tử nhỏ nhất là index đầu tiên
    $min = $i;
    
    // vòng lặp để lấy ra chỉ số mà ở đó phần tử là nhỏ nhất
    // mục đích : lấy được index của phần tử nhỏ nhất ở phần mảng chưa được sắp xếp
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$min] > $arr[$j]) {
            $min = $j;
        }
    }

    // Đảo phần tử nhỏ nhất lên vị trí đúng (dựa vào chỉ số $i)
    $t = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $t;

    // gọi lại hàm để tạo đệ quy
    recursiveSelectionSort($arr, $i + 1, $n);       
}

$array = [64, 25, 12, 22, 11];
$n = count($array);
recursiveSelectionSort($array, 0, $n);

foreach ($array as $value) {
    echo $value . " ";
}
