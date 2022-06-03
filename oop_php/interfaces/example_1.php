<?php
interface Person
{
    public function __construct($name);
    public function greet() : string;
}

class Programer implements Person
{
    // properties
    public $name;

    // override (redeclare) the abstract __construct method from interface person
    public function __construct($name)
    {
        $this->name = $name;
    }

    // override (redeclare) the abstract method from interface person
    public function greet(): string
    {
        return "Hello World from " . $this->name;
    }
}

$programer = new Programer('Khanh');
echo $programer->greet();
