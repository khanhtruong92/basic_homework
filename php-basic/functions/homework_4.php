<?php
function fibonacci($n) 
{
    if ($n <= 2) {
        return 1;
    } 
    return (fibonacci(($n-1)) + fibonacci(($n-2)));
}
$n = 2;
echo "Input  : n = " . $n . "<br>";
echo "Output : ";
echo fibonacci($n);
