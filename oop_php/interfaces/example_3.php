<?php
interface MyInterface 
{
    public function write();
}

class ParentClass
{
    // properties
    public $name;

    // method
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class ChildClass extends ParentClass implements MyInterface
{
    // override (redeclare) the abstract method from interface MyInterface
    public function write()
    {
        echo $this->name;
    } 
}

$child = new ChildClass('Khanh');
$child->write();
