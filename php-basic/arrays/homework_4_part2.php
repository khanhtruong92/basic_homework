<?php

// mảng cho trước
$a = [34, 2, 34, 1, 12, 16, 2, 8, 2];

// tạo mảng chứa kết quả xử lý
$d = array();

// xử lý:
// kiểm tra từng giá trị trong mảng a đã là key trong mảng b hay chưa.
// nếu chưa thì gán giá trị $b[$value] = 1
// nếu có rồi thì cộng thêm 1 giá trị (số lần xuất hiện tăng lên 1)
// kết quả trả về với mảng b có index là value của mảng a
// và số lần lặp sẽ là value của mảng b
foreach ($a as $key => $value) {
    if (isset($d[$value])) {
        $d[$value] += 1;
    } else {
        $d[$value] = 1;
    }
}

print_r($d);
