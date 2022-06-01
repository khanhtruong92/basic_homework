<?php
// Class
class User
{
    // Properties
    public $firstName;
    public $lastName;

    // Method
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
    }

    public function __destruct()
    {
        echo 'good bye';
    }
}

$user = new User('John', 'Doe');
