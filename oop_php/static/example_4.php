<?php
class MyClass {
    public static $name = 'Developer';
 
    // access static properties
    public function __construct()
    {
        echo 'We are ' . self::$name;
    }
}

echo MyClass::$name . '<br>';
MyClass::$name = 'We are Hero!';
new MyClass();
