<?php
class User 
{
    private $username;

    public function setUsername($name) 
    {
        $this->username = $name;
    }
}

class Admin extends User
{
    public function expressYourRole()
    {
        echo 'Admin';
    }
}

$admin = new Admin;
$admin->expressYourRole();
