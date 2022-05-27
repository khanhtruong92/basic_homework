<?php
class User
{
    public $firstName;
    public $lastName;

    public function printName()
    {
        echo $this->firstName . " " . $this->lastName . "\n";
    }
}

$user = new User();
$user->firstName = 'John';
$user->lastName = 'Doe';
$user->printName();
