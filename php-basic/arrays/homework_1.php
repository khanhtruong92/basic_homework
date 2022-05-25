<?php
$a = [3, 4, 1, 19, 20, 99];

// add element 5 to array
$a[] = 5;

// change $a[0] = 10
$a[0] = 10;

// find, show maximum and minimum value in the array

sort($a);
$count = count($a);
echo "Maximum value in the array is: " . $a[$count - 1]; 
echo "<br>";
echo "Minimum value in the array is: " . $a[0]; 
