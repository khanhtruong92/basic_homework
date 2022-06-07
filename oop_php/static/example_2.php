<?php
class Hyvor
{
    protected static function getCompanyName()
    {
        return 'Hyvor, Inc.';
    }
}

class HyvorAuth extends Hyvor
{
    public $companyName;

    public function __construct()
    {
        $this->companyName = parent::getCompanyName();
    }
}

$hyvorAuth = new HyvorAuth;
echo $hyvorAuth->companyName;
