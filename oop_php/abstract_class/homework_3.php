<?php
// abstract class

use User as GlobalUser;

abstract class User
{
    // properties
    protected $userName;
    
    // method
    public function setter($userName)
    {
        $this->userName = $userName;
    }

    public function getter()
    {
        return $this->userName;
    }
    
    // abstract methods
    abstract function stateYourRole();
}

class Admin extends User 
{
    public function stateYourRole()
    {
        return 'admin';
    }
}
