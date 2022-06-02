<?php
// Class
class User
{
    // Properties
    private $firstName;

    // Methods
    public function setFirstName($firstName)
    {
        $this->firstName =  $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}

// Object
$user = new User;
$user->setFirstName('Joe');
echo $user->getFirstName();
