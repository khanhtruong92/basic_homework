<?php
function checkPrimeNumber($n)
{  
    if ($n >= 2) {        
        for ($i = 2; $i < $n; $i ++) {
            if($n % $i === 0) {
                return false;
                break;
            }
        } 
        return true;
    } 
    return false;
}

// $n = 4;
// if (checkPrimeNumber($n)) {
//     echo "true";
// } else {
//     echo "false";
// }

$a = [4, 5, 6, 99, 100, 50];
foreach($a as $n) {
    if (checkPrimeNumber($n)) {
        echo $n . "\n";
    }
}
