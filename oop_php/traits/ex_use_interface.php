<?php
interface Hello
{
    public function hello();
}

interface World
{
    public function world();
}

// sẽ phải implements lại phương thức (lặp code)
class MyClass implements Hello, World
{
    public function hello()
    {
        echo 'Hello ';
    }

    public function world()
    {
        echo 'World';
    }
}

$obj = new MyClass();
$obj->hello();
$obj->world();
