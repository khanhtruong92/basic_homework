<?php
class House 
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function __destruct()
    {
        echo "The color of the {$this->name} is {$this->color}";
    }
}

$blackHouse = new House("John's House", 'black');
