<?php
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [4, 5, 3, 2, 10];

for ($i = 0; $i < count($arrayA); $i++) {
    $arrayC[] = $arrayA[$i] + $arrayB[$i];
}

print_r($arrayC);
