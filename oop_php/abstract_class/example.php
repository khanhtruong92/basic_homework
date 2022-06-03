<?php

use Person as GlobalPerson;

abstract class Person
{
    // Properties
    public $name;

    // construct
    public function __construct($name)
    {
        $this->name = $name;
    }

    // methods abstract
    abstract public function greet() : string;
}

class Programmer extends Person 
{
    // override (redeclare) the abstract methods from parent class
    public function greet(): string
    {
        return "Hello World from " . $this->name;
    }
}

class Student extends Person 
{
    // override (redeclare) the abstract methods from parent class 
    public function greet(): string
    {
        return "Howdy! I'm " . $this->name;
    }
}

class Teacher extends Person 
{
    public function greet(): string
    {
        return "Good morning dear students";
    }
}

// $programer = new Programmer('John');
// echo $programer->greet();

// $student = new Student('Doe');
// echo $student->greet();

$teacher = new Teacher('Mary');
echo $teacher->greet();
