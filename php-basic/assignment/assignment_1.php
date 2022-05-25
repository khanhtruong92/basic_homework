<?php
function studentGrade($m)
{
    if ($m >= 60) {
        echo "First Division";
    } elseif (45 <= $m && $m <= 59) {
        echo "Second Division";
    } elseif (33 <= $m && $m <= 44) {
        echo "Third Division";
    } else {
        echo "Fail";    
    }
}

studentGrade(10);
