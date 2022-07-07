<?php
// Dùng cách sử lý dữ liệu bài 1

// 1. Mỗi lớp học có 2 mảng: mảng tên, mảng tuổi
// 2. Tạo 1 mảng tổng hợp với index là tổng của 2 mảng tuổi, value là tên 2 mảng
// 3. Xuất ra dữ liệu cần

namespace Algorithm\Assignment;

include_once 'Manage.php';
include_once '../Merge_Sort/mergeSort.php';
include_once 'Ass2Data.php';

// 1. Mỗi lớp học có 2 mảng: mảng tên, mảng tuổi
$studentsA = new Manage();
foreach ($classA as $valueA) {
    $studentsA->setAge($valueA->age);
    $studentsA->setName($valueA->name, $valueA->age);
}

// Tách lấy mảng chứa tên 
// và tuổi (đã sắp xếp tăng dần) của học sinh lớp A
$namesOfStudentsA = $studentsA->getName();
$ageOfStudentsA = \Algorithm\MergeSort\mergesort($studentsA->getAge());

$studentsB = new Manage();
foreach ($classB as $valueB) {
    $studentsB->setAge($valueB->age);
    $studentsB->setName($valueB->name, $valueB->age);
}

// Tách lấy mảng chứa tên 
// và tuổi (đã sắp xếp tăng dần) của học sinh lớp B
$namesOfStudentsB = $studentsB->getName();
$ageOfStudentsB = $studentsB->getAge();

// 2. Tạo 1 mảng tổng hợp với index là tổng của 2 mảng tuổi, value là tên 2 mảng
// Tạo mảng tổng hợp tên của các học sinh cùng cuổi
function finKPairsYoungest($k, $nameA, $ageA, $nameB, $ageB) 
{
    $nameByAge = array();
    for ($i = 0; $i < count($ageA); $i++) {
        foreach ($ageB as $valueB) {
            $sum = $ageA[$i] + $valueB;
            $nameByAge[$sum] = $nameA[$ageA[$i]] . ', ' . $nameB[$valueB];
        }
    }

    ksort($nameByAge);
    return array_slice($nameByAge, 0, $k);
}

// 3. Xuất ra dữ liệu cần
$kPairs = 2;
$kPairtsYoungest = finKPairsYoungest(
    $kPairs, 
    $namesOfStudentsA, 
    $ageOfStudentsA, 
    $namesOfStudentsB, 
    $ageOfStudentsB
);

echo $kPairs . ' pairs youngest is: ';
foreach ($kPairtsYoungest as $value) {
    echo '[' . $value . "] \n";
}
