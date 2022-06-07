<?php
// dùng static method ở 1 class khác
// static method đó phải có visibility là public

class MyClass 
{
    // nếu dùng protected thì class khác sẽ không thể sử dụng
    // protected static function hello()
    // {
    //     return 'Hello static method';
    // }

    public static function hello()
    {
        return 'Hello static method';
    }
}

class OtherClass
{
    public function myMethod()
    {
        return MyClass::hello();
    }
}
$otherClass = new OtherClass;
echo $otherClass->myMethod();
