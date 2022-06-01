<?php
class SomeClass
{
    public function __construct()
    {
        echo 'In constructor, ';
        $this->name = 'Class object! ';
    }

    public function __destruct()
    {
        echo 'destroying ' . $this->name . "\n";
    }
}

$obj = new SomeClass;
