<?php
// class
class Person
{
    // properties
    public $name;
    public $age;

    // construct
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // methods
    public function introduce()
    {
        echo "My name is {$this->name}. My age is {$this->age}";
    }
}

// class
class Tom extends Person
{
    // properties
    public $school;

    // override method
    public function __construct($name, $age, $school)
    {
        // $this->name and $this->age will be set by the parent's construct
        parent::__construct($name, $age);
        $this->school = $school;
    }

    public function introduce()
    {
        echo "My name is {$this->name}. My age is {$this->age}. This school is {$this->school}";
    }
}

// object
$tom = new Tom('Tom', 29, 'Foothill School');
$tom->introduce();
