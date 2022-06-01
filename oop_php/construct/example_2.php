<?php
// class

use House as GlobalHouse;

class House
{
    // properties
    public $name;
    public $color;

    // your constructor function
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function echoData()
    {
        echo "The color of the {$this->name} is {$this->color}";
    }
}

$blackHouse = new House("John's House", "black");
$blackHouse->echoData();
