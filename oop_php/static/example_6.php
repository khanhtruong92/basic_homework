<?php
class User {
    //  Properties
    public $firstname;
    public $lastname;

    /**
    * @param string $firstname - Firstname of the user
    * @param string $lastname  - Lastname of the user
    */
    public function __construct($firstname, $lastname)
    {
        $this->firstname = self::filterName($firstname);
        $this->lastname = self::filterName($lastname);
    }

    /**
    * @param string $name - name to filter
    * @return string - filtered name
    */
    static function filterName($name)
    {
        // remove surrounding whitespaces
        $name = trim($name);
        // remove non-latin and non-number characters 
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

        return $name;
    }
}

$user = new User('Michael ', '$Jackson');
echo $user->firstname . ' ' . $user->lastname;
