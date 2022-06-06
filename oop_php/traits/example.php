<?php
trait Hello
{
    public function hello()
    {
        echo 'Hello ';
    }
}

trait World
{
    public function world()
    {
        echo 'World';
    }
}

class MyClass 
{
    use Hello, world;
}

$obj = new MyClass();
$obj->hello();
$obj->world();
