<?php
function sum($a, $b) 
{
    return $a + $b;
}

function multiply($a, $b) 
{
    return $a * $b;
}

$myFunction = "sum";
echo $myFunction(1, 2);

echo "\n";

$myFunction = "multiply";
echo $myFunction(2, 3);
