<?php
class MyClass
{
    // static methods
    public static function myStaticMethod()
    {
        echo "Hello static";
    }
}

// Truy cập method static khi ở bên ngoài class
MyClass::myStaticMethod();
