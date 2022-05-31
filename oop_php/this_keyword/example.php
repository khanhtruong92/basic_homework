<?php
// class

use House as GlobalHouse;

class House
{
    // properties
    public $name;
    public $color;

    // methods
    public function setData($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function echoData()
    {
        echo "This color of {$this->name} is {$this->color}";
    }
}

// initialize an object
$blackHouse = new House();
$whiteHouse = new House();

// call method setData
$blackHouse->setData("John's House", 'black');
$whiteHouse->setData("Pearl's House", 'white');

// call method echoData
$blackHouse->echoData();
echo "<br>";
$whiteHouse->echoData();
