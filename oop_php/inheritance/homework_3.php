<?php
class User 
{
    private $username;

    public function setUsername($name) 
    {
        $this->username = $name;
    }

    protected function expressYourRole()
    {
        echo 'Admin';
    }
}

class Admin extends User
{
    public function echo()
    {
        parent::expressYourRole();
    }
}

$admin = new Admin;
$admin->echo();
