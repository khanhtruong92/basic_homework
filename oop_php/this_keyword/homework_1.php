<?php
// Class
class User
{
    // Properties
    public $firstName;
    public $lastName;

    // Method
    public function hello()
    {
        return "hello, {$this->firstName}";
    }
}
