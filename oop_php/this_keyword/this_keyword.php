<?php
class House
{
    public $color = 'black';
    
    public function changeColor()
    {
        $this->color = 'white';
    }
}

$house = new House();
$house->changeColor();
echo $house->color;
