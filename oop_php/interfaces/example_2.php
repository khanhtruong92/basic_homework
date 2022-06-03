<?php

use MyClass as GlobalMyClass;

interface MyInterface1
{
    public function myMethod1();
}

interface MyInterface2
{
    public function myMethod2();
}

class MyClass implements MyInterface1, MyInterface2
{
    // override (redeclare) the abstract method from interface myMethod1
    public function myMethod1()
    {
        echo 'Hello ';
    }

    // override (redeclare) the abstract method from interface myMethod2
    public function myMethod2()
    {
        echo 'World';
    }
}

$obj = new MyClass();
$obj->myMethod1();
$obj->myMethod2();
