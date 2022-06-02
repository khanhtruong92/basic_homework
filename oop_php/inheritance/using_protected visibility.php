<?php
// class
class ParentClass
{
    // properties
    protected $protectedProperty = 'Protected';
    private $privateProperty = 'Private';

    // method
    protected function protectedMethod()
    {
        echo $this->protectedProperty;
    }

    private function privateMethod()
    {
        // cannot call this function from Child
        echo $this->privateProperty;
    }
}

// class
class Child extends ParentClass
{
    // method
    public function doSomething()
    {
        $this->protectedMethod();
        // $this->privateMethod();
    }
}

$child = new Child();
$child->doSomething();
