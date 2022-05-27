<?php
class User
{
    public function sayHello()
    {
        echo 'Hello';
    }
}

$speak = new User();
$speak->sayHello();
