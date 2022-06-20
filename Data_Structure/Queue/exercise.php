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
}

$queue = new Queue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');

while (!$queue->isEmpty()) {
    echo $queue->front() . "\n";
    $queue->dequeue();
}
