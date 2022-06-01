<?php
// Class
class User
{
    // Properties
    public $firstName;
    public $lastName;

    public function __construct()
    {
        $this->firstName = 'John';
        $this->lastName = 'Doe';

        echo "{$this->firstName} {$this->lastName}";
    }
}

$user = new User;
