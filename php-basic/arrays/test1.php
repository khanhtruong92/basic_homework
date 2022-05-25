<?php
function sum($a, $b){
   return $a - $b;
}

// echo sum(1, 2) > 0 ? "Positive" : "Negative";
if (sum(1, 2) > 0) {
    echo "Positive";
} else {
    echo "Negative";
}
