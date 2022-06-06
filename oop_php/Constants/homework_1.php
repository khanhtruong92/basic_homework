<?php

// Cách 1
// define('A', 3);
// define('B', 2);

// echo A + B;

// Cách 2
class SoA
{
    const A = 2;

    public function echoA()
    {
        return self::A;
    }
}

class SoB
{
    const B = 3;

    public function echoB()
    {
        return self::B;
    }
}

echo SoA::A + SoB::B;
