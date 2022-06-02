<?php
// class
class base
{
    final public function dis1()
    {
        echo 'Base class..';
    }
}

class derived extends base
{
    // will show error
    // public function dis1()
    // {
    //     echo 'derived class';
    // }
}

$obj = new derived();
$obj->dis1();
