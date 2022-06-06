<?php

use MyClass as GlobalMyClass;

class Hello
{
    public function hello()
    {
        echo 'Hello ';
    }
}

class World
{
    public function world()
    {
        echo 'World';
    }
}

class MyClass extends Hello {}
class MyClass2 extends World {}

$obj = new MyClass();
$obj2 = new MyClass2();

$obj->hello();
$obj2->World();
