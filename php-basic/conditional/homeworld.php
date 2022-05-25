<?php
// $age = 30;
// if ($age < 30) {
//     echo "I'm still young";
// } else {
//     echo "I'm not too young";
// }

// $x = 6;
// if ($x % 2 == 0) {
//     echo "$x is even number";
// } else {
//     echo "$x is odd number";
// }

$date = getdate();
// echo $date['wday'];

$week = $date['wday'] - 1;

switch ($week) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Sunday";
}
?>