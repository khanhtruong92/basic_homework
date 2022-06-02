<?php
// class
class Person
{
    // properties
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // method
    public function introduce()
    {
        echo "My name is {$this->name}. My age is {$this->age}";
    }
}

// Tom is inherited from Person
class Tom extends Person
{
    // __construct() is inherited
    // introduce() is inherited
    public function sayHello()
    {
        echo "Hello, World <br>";
    }
}

$tom = new Tom('Tom', 29);
$tom->sayHello();
$tom->introduce();
