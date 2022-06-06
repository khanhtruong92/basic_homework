<?php
// Cách 1
// define('EURO', 0.92);

// function Converter($dolla)
// {
//     $result = $dolla * EURO;
//     echo $result;
// }

// Converter(10);

// Cách 2
class ConverterDollaToEuro
{
    const EURO = 0.92;

    public function __construct($dolla)
    {
        $result = $dolla * self::EURO;
        echo $result;
    }
}

$step1 = new ConverterDollaToEuro(5);

// Hoặc
// $dolla = 5;
// echo $dolla * ConverterDollaToEuro::EURO;
