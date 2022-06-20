<?php
class Queue
{
    // array queue element
    private $elements;

    public function __construct()
    {
        // initialize queue element
        $this->elements = [];
    }

    // insert an element
    public function enqueue($ele)
    {
        array_unshift($this->elements, $ele);
    }

    // check queue is empty or not
    public function isEmpty()
    {
        return empty($this->elements);
    }

    //delete front element
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

    // get element
    public function getElement()
    {
        return $this->elements;
    }

    // get front element
    public function change()
    {
        if (!$this->isEmpty()) {
            $this->enqueue($this->front());
        }
    }
}

// tạo đối tượng và truyền nhiệm vụ ưu tiên vào
$queue = new Queue();
$queue->enqueue(2);
$queue->enqueue(1);
$queue->enqueue(3);

// tạo bộ đếm thời gian $count
$count = 0;

// tạo mảng trung gian $arr (mảng sắp xếp theo danh sách phụ thuộc)
// dùng mảng $arr để sắp xếp lại các nhiệm vụ ưu tiên
$arr = $queue->getElement();
rsort($arr);

while (!$queue->isEmpty()) {
    if ($queue->front() != $arr[count($arr) - 1]) {
        $queue->change();
        $count += 1;
    } else {
        $count += 2;
        array_pop($arr);
    }
    $queue->dequeue();
}

echo $count;
