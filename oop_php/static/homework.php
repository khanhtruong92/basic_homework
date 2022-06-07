<?php
class MyClassHomework
{
    // static properties
    public static $count = 1;

    public function __construct()
    {
        echo 'The next value is: ' . self::counter() . "\n";
    }

    // static function
    public static function counter()
    {
        return self::$count++;
    }
}

$test1 = new MyClassHomework;
$test2 = new MyClassHomework;
$test3 = new MyClassHomework;
$test4 = new MyClassHomework;
$test5 = new MyClassHomework;
