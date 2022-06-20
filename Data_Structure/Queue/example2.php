<?php
class Queue
{
    // array queue element
    private $elements;

    public function __construct()
    {
        // initialize queue element
        $this->elements = array();
    }

    // insert an element
    public function enqueue($num) 
    {
        // dùng hàm array_unshift để thêm dữ liệu vào đầu mảng
        array_unshift($this->elements, $num);
    }

    // delete front element
    public function dequeue()
    {
        if (!$this->isEmpty()) {
            array_pop($this->elements);
        }
    }

    // get front element
    public function front()
    {
        if (!$this->isEmpty()) {
            return $this->elements[count($this->elements) - 1];
        }
    }

    // check queue is empty or not
    public function isEmpty()
    {
        return empty($this->elements);
    }
}
