<?php
function findX2($a, $b, $c)
{
    $delta = ($b * $b) - (4 * $a * $c);
    if ($delta >= 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "[$x1, $x2]";
    } else {
        echo "no solution";
    }
}

findX2(1, -3, 2);
