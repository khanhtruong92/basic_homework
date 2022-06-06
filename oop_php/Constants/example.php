<?php
class Welcome
{
    const GREET = 'Hello World';

    public function greet()
    {
        echo self::GREET;
    }
}

$welcome = new Welcome;
$welcome->greet();
echo "<br>";
echo Welcome::GREET;
