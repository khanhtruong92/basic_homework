<?php
$a = [34, 2, 34, 1, 12, 16, 2, 8, 2];

// counts all the values of array a
$b  = array_count_values($a);

// move maximum value to first place
arsort($b);

// show maximum value
echo "Number " . key($b) . " most frequent element is " . reset($b) . " times";
