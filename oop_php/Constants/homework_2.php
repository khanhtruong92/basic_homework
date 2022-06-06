<?php

// Cách 1
// define('C', 3);
// define('D', 2);

// echo C - D;

// Cách 2
class SoC
{
    const C = 3;
    
    public function echoC()
    {
        return self::C;
    }
}

class SoD
{
    const D = 2;

    public function echoD()
    {
        return self::D;
    }
}

echo SoC::C - SoD::D;
