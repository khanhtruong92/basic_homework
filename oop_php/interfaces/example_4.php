<?php
interface MyInterface1
{
    public function myMethod1();
}

interface MyInterface2 extends MyInterface1
{
    public function myMethod2();
}

class MyClass1 implements MyInterface1 
{
    public function myMethod1()
    {
        
    }
}

class MyClass2 implements MyInterface2 
{
    public function myMethod2()
    {
        
    }

    public function myMethod1()
    {
        
    }
}
