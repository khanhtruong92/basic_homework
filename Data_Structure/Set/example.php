<?php
class Set
{
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    // thêm element vào set
    public function add($ele)
    {
        if (!$this->isExist($ele)) {
            $this->elements[] = $ele;
        }
    }

    public function isExist($ele)
    {
        // dùng hàm in_array kiểm tra phần tử có trong mảng hay chưa
        return in_array($ele, $this->elements);
    }

    public function get()
    {
        return $this->elements;
    }
}

function extractMonth($date)
{
    $timestamp = strtotime($date);
    return date("m", $timestamp);
}

$set = new Set();
$set->add(extractMonth("2019/01/14"));
$set->add(extractMonth("2019/10/04"));
$set->add(extractMonth("2019/01/02"));
$set->add(extractMonth("2019/03/02"));
$set->add(extractMonth("2019/01/02"));

print_r($set->get());
