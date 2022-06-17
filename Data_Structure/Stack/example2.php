<?php
// implement stack of stream_set_blocking
class Stack
{
    // array stack element
    private $elements;

    public function __construct()
    {
        // intitialize stack element
        $this->elements = [];
    }

    // insert an element
    public function push($ele)
    {
        $this->elements[] = $ele;
    }

    // check stack is empty or not
    // return boolean
    public function isEmpty()
    {
        return empty($this->elements);
    }

    // delete top element
    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->elements);
        }
    }

    // get top element
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[count($this->elements) - 1];
        }

        return null;
    }
}

function balancedParenthese($expression)
{
    if (empty($expression)) {
        return 'Expression is empty';
    }

    // mactch starting and closing bracket
    $matches = array(
        ')' => '(',
        ']' => '[',
        '}' => '{'
        );

        // init a stack
        $stack = new Stack();
        for ($i = 0; $i < strlen($expression); $i++) {
            switch ($expression[$i]) {
                case '(':
                case '[':
                case '{':
                    $stack->push($expression[$i]);
                    break;
                case ')':
                case ']':
                case '}':
                    $top = $stack->top(); // get starting bracket
                    if ($top != $matches[$expression[$i]]) {
                        return 'Not Balanced';
                    }
                    $stack->pop(); // delete starting bracket
                default:
                break;
            }
        }

        if (!$stack->isEmpty()) {
            return 'Not Balanced';
        }

        return 'Balanced';
}

echo balancedParenthese('(a + b - (c + d))') . "\n";
echo balancedParenthese('[(a - b] * c)') . "\n";
