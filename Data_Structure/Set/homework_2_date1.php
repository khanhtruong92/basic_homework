<?php
class Set
{
    private $myDictionary;

    public function __construct()
    {
        $this->myDictionary = array('hello', 'hi', 'good morning', 'good night');
    }

    // kiểm tra world đã có trong từ điển chưa
    public function check($world)
    {
        return in_array($world, $this->myDictionary);
    }

    // thêm world vào mảng
    // hiển thị world mới
    // hiển thị world đã có (world bị quên)
    public function add($world)
    {
        if (!$this->check($world)) {
            $this->myDictionary[] = $world;
            echo "Đây là từ mới gặp: $world \n";
        } else {
            echo "$world là từ đã học, đã bị quên \n";
        }
    }

    // lấy ra nội dung toàn bộ từ điển
    public function get()
    {
        return $this->myDictionary;
    }
}

$set = new Set();
$set->add('hello');
$set->add('hi');
$set->add('good morning');
$set->add('good night');
print_r($set->get());
