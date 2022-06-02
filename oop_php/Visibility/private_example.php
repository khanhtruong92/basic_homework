<?php
class User
{
    private $name = 'John';

    public function echoName()
    {
        echo $this->name;
    }
}

$user = new User;
$user->echoName();

// echo $user->name;
// this will show an error
