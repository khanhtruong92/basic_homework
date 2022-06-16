<?php
class Set
{
    private $number;

    public function __construct()
    {
        $this->number = array();
    }

    // kiểm tra số đã có trong mảng chưa
    public function check($num) 
    {
        return in_array($num, $this->number);
    }

    // thêm số vào mảng trong trường hợp mảng chưa có số đó
    // nếu đã có thì bỏ qua
    public function add($num)
    {
        if (!$this->check($num)) {
            $this->number[] = $num;
        }
    }

    // lấy giá trị mảng
    public function get()
    {
        return $this->number;
    }
}

$set = new Set();
$set->add(1);
$set->add(2);
$set->add(3);
$set->add(4);
$set->add(5);
$set->add(-1);
$set->add(5);
$set->add(2);
$set->add(7);
$set->add(11);
$set->add(11);
$set->add(-5);
print_r($set->get());
