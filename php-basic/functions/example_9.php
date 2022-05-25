<?php
function factorial($n) 
{
    // Base case
    if ( $n == 0 ) {
        echo "Base case: $n = 0. Returning 1...\n";
        return 1;
    }

    // Recursion
    echo "n = $n: Computing $n * factorial( " . ($n-1) . " )...\n";
    $result = ( $n * factorial( $n-1 ) );
    // echo "$result = ( $n * factorial( ". $n-1 .") )" . "\n";
    echo "Result of $n * factorial( " . ($n-1) . " ) = $result. Returning $result...\n";
    // echo $n . " * " . ($n - 1) . " = " . $result . "\n";
    // echo $n . "\n";

    return $result;
}

$n = 5;
echo "The factorial of $n is: " . factorial($n);
