<?php
abstract class Hello
{
    abstract public function hello();
}

class World
{
    public function World()
    {
        echo "World";
    }
}

// dùng kế thừa (extends) gặp vẫn đề vì chỉ kế thừa được 1 class
// sẽ cần hoặc là class cha phải có tất cả phương thức class con cần
// hoặc là class con sẽ extends rồi khai báo thêm phương thức
class MyClass extends Hello
{
    public function hello()
    {
        echo "Hello ";
    }

    public function World()
    {
        echo "World";
    }
}

$obj = new MyClass();
$obj->hello();
$obj->world();
