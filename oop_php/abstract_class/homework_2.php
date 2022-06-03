<?php
// abstract class
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
