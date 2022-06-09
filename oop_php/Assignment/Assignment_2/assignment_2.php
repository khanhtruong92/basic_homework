<?php
abstract class Geometry
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function area();
}

class Triangle extends Geometry
{
    public function area()
    {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Geometry
{
    public function area()
    {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5);
echo $triangle->area();

echo "\n";

$rectangle = new Rectangle(10, 5);
echo $rectangle->area();
