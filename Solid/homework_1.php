<?php 
namespace Solid;

// Sửa lỗi Liskov Substitution Principle - do class Square không thể thay thế class Rectangle
// Lỗi cú pháp : thiếu keywork : function
// Lỗi Open-closed Principle - do vi phạm nguyên tắc tại class CostManager

interface AreaInterface
{
    public function calculateArea();
}

class Rectangle implements AreaInterface
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

class Square implements AreaInterface
{
    protected $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function calculateArea()
    {
        return $this->a * $this->a;
    }
}

class Circle implements AreaInterface
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class CostManager
{
    public function calculate(AreaInterface $shape)
    {
        $costPerUnit = 1.5;
        return $costPerUnit * $shape->calculateArea();
    }
}

$circle = new Circle(5);
$obj = new CostManager();
echo $obj->calculate($circle);
