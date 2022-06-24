<?php
include_once 'Set.php';
include_once 'student.php';

// Bổ sung thêm chức năng lưu thông tin các tên học sinh có cùng tuổi
// Trả về tên học sinh có cùng tuổi
class CheckStudent extends Set
{
    public function addItem($age, $name)
    {
        $this->elements[$age][] = $name;
    }

    public function getNameByAge($age)
    {
        return $this->elements[$age];
    }
}

$set = new CheckStudent();
// lưu tất cả các tuổi vào trong set để lấy danh sách các tuổi không trùng nhau
foreach ($classA as $item) {
    $set->addItem($item->age, $item->name);
}

// in ra danh sách tuổi của học sinh
print_r($set->getNameByAge(40));
