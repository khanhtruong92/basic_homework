<?php
// Class
class User
{
    // Properties
    private $firstName;
    public $lastName;

    // Methods
    public function hello()
    {
        return "hello, {$this->firstName}";
    }
}
