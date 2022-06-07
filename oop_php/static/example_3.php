<?php
class MyClass
{
    public static function callMe()
    {
        echo 'hello';
    }

    // access static methods
    public function __construct()
    {
        self::callMe();
    }
}

new MyClass;
