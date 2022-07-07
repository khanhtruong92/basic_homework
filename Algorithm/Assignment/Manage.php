<?php
namespace Algorithm\Assignment;

class Manage
{
    private $names;
    private $ages;

    public function __construct()
    {
        $this->names = array();
        $this->ages = array();
    }

    public function setName($name, $index) 
    {
        $this->names[$index] = $name;
    }
    
    public function getName()
    {
        return $this->names;
    }
    
    public function setAge($age)
    {
        $this->ages[] = $age;
    }

    public function getAge()
    {
        return $this->ages;
    }
}
