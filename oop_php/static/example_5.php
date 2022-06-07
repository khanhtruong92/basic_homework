<?php
// ví dụ với static properties
class MyName
{
    private static $name = 'Khanh';

    public function __construct()
    {
        echo 'My name is ' . self::$name;
    }
}

$myName = new MyName();
