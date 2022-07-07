<?php
namespace Algorithm\Assignment;

class Student2
{
    public $name;
    public $age;
    
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$classA = array(
    new Student2('Anders',11), 
	new Student2('Maria',6), 
	new Student2('Trujillo',2)
);

$classB = array(
    new Student2('Christina',5),
    new Student2('Berglund',8),
    new Student2('Hardy',3)
);
