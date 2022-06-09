<?php
abstract class Math
{
    public $number1;
    public $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;    
    }

    abstract public function calculate();
}

class Addition extends Math
{
    public function calculate()
    {
        return $this->number1 + $this->number2;
    }
}

class Subtraction extends Math
{
    public function calculate()
    {
        return $this->number1 - $this->number2;
    }
}

class Multiplication extends Math
{
    public function calculate()
    {
        return $this->number1 * $this->number2;
    }
}

class Division extends Math
{
    public function calculate()
    {
        return $this->number1 / $this->number2;
    }
}

$addition = new Addition(10, 5);
echo $addition->calculate();

echo "\n";

$subtraction = new Subtraction(10, 5);
echo $subtraction->calculate();

echo "\n";

$multiplication = new Multiplication(10, 5);
echo $multiplication->calculate();

echo "\n";

$division = new Division(10, 5);
echo $division->calculate();
