<?php
// Bước 1: làm bài tập đơn giản. Viết code thử một số cho trước xem có phải là số nguyên tố không
// Đặc điểm của số nguyên tố:  số chỉ chia hết cho 1 và chính nó (ngoại trừ "1", 1 không là số nguyên tố)
// Bước 2: Thêm vòng lặp foreach để đọc các giá trị của array đã cho

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $c = 11;
foreach ($a as $c) {
    $check=true;
    if ($c < 2) {
        // echo " ";
    } else {
        for ($i = 2; $i < $c; $i++) {
            if ($c % $i === 0) {
                $check=false;
                break;
            } 
        }
        
        if ($check === true) {
            echo $c . "\n";
        } else {
            // echo " ";
        }
    }
}
   