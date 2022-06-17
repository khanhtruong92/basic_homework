<?php

// Mẫu code triển khai một stack (ngăn xếp - vd: 1 chồng ghế nhựa xếp chồng lên nhau)
class Stack
{
    // stack các phần tử mảng
    private $elements;

    // khởi tạo một phần tử stack
    public function __construct()
    {
        $this->elements = array();
    }

    // thêm một phần tử
    public function push($num)
    {
        // trong php, phần tử sẽ được thêm vào cuối mảng
        $this->elements[] = $num;
    }

    // xoá một phần tử (phần tử top sẽ bị xoá)
    public function pop()
    {
        // kiểm tra để thực hiện xoá giá trị nếu mảng có giá trị (không rỗng)
        if (!$this->isEmpty()) {
            // dùng hàm array_pop để xoá bỏ phần tử cuối cùng của mảng
            array_pop($this->elements);
        }

    }

    // lấy phần tử trên đầu (xem phần từ top)
    public function top()
    {
        // trong tình trạng mảng có phần tử
        if (!$this->isEmpty()) {
            return $this->elements[count($this->elements) - 1];
        }
        return null;

    }

    // kiểm tra stack có rỗng hay không
    public function isEmpty()
    {
        // dùng hàm empty() để kiểm tra
        // sẽ trả về TRUE nếu biến cần kiểm tra là rỗng
        return empty($this->elements);
    }
}
