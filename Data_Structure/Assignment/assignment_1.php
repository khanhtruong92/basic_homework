<?php
include_once 'Set.php';
include_once 'student.php';

$set = new Set();
// lưu tất cả các tuổi vào trong set để lấy danh sách các tuổi không trùng nhau
foreach ($classA as $age) {
    $set->add($age->age);
}

// in ra danh sách tuổi của học sinh
print_r($set->get());
