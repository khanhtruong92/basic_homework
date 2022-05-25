<?php
function show_odd_numbers() 
{
    for ($i = 1; $i < 11; $i ++) {
        if ($i % 2 != 0) {
            echo $i . "\n";
        }
    }
}

show_odd_numbers();
