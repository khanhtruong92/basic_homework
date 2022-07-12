<?php 
namespace Solid;

// Sửa lỗi Liskov Substitution Principle - class RobotWorker không thể thay thế được class HumanWorker

interface WorkInterface
{
    public function work();
}

interface SleepInterface
{
    public function sleep();
}

class HumanWorker implements WorkInterface, SleepInterface
{
    public function work()
    {
        var_dump('work');
    }

    public function sleep()
    {
        var_dump('sleep');
    }
}

class RobotWorker implements WorkInterface
{
    public function hasPower() {}

    public function work()
    {
        if($this->hasPower()) {
            var_dump('work');
        }
    }
}
