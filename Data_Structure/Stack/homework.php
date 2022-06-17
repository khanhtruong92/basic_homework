<?php
class Stack
{
    private $element;

    public function __construct()
    {
        $this->element = [];
    }

    // insert one element
    public function push($ele)
    {
        $this->element[] = $ele;
    }

    // check stack empty or not
    public function isEmpty()
    {
        return empty($this->element);
    }

    // delete element last
    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->element);
        }
    }

    // get top element
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->element[count($this->element) - 1];
        }

        return null;
    }

    public function count()
    {
        return count($this->element);
    }

}

function checkWorld($world)
{
    if (empty($world)) {
        return 'You have not added the world';
    }

    $explode = explode(' ', $world);

    $stack = new Stack();
    for ($i = 0; $i < count($explode); $i++) {
        if ($explode[$i] == $stack->top()) {
            $stack->pop();
        } else {
            $stack->push($explode[$i]);
        }
    }
    return $stack->count();
}

echo checkWorld('ab aa aa bcd ab') . "\n";
echo checkWorld('hello world world hello') . "\n";
