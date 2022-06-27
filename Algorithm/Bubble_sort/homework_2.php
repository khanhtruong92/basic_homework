<?php
namespace Algorithm\Bubble;

function bubble(&$arr, $num) 
{
    if ($num == 1) {
        return;
    }

    for ($i = 0; $i < $num; $i++) {

        if ($arr[$num - 1] < $arr[$num - 2]) {
            $t = $arr[$num - 1];
            $arr[$num - 1] = $arr[$num - 2];
            $arr[$num - 2] = $t;
        }
        bubble($arr, $num - 1);
    }
}

$array = [8, 22, 7, 9, 31, 5, 13];
bubble($array, 7);
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}
