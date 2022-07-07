<?php
// Question:
// Given an list of Student in a English class, 
// The teacher want to know name of the youngest student pair.

// Đánh giá yêu cầu :
// Mỗi một học sinh chỉ có 2 thuộc tính tên và tuổi
// Các tuổi của các học sinh không trùng nhau

// Ý tưởng:
// 1. Tách hai giá trị thuộc tính của học sinh thành 2 mảng
// - Một mảng chỉ chứa tuổi học sinh (sẽ áp dụng merge sort để sắp xếp)
// - Một mảng chứa Tên học sinh với Index = tuổi của học sinh đó
// 2. Khi lấy cần lấy tuổi những học sinh ít tuổi
// - Lấy ra tên ở mảng chứa tuổi, với Index chỉ định chính là những value đầu của mảng chứa tuổi

namespace Algorithm\Assignment;

include_once 'Ass1Data.php';
include_once '../Merge_Sort/mergeSort.php';
include_once 'Manage.php';

// 1. Tách thuộc tính của học sinh thành 2 mảng
$students = new Manage();
foreach ($classAssignment1 as $value) {
    $students->setAge($value->age);
    $students->setName($value->name, $value->age);
}

$namesOfStudents = $students->getName();
$ageOfStudents = \Algorithm\MergeSort\mergesort($students->getAge());

// 2. Khi lấy cần lấy tuổi những học sinh ít tuổi
function getYoungestStudent($name, $age, $k)
{
    for ($i = 0; $i < $k; $i++) {
        echo $name[$age[$i]] . "\n";
    }
}

getYoungestStudent($namesOfStudents, $ageOfStudents, 2);
