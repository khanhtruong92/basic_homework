<?php
function calRectangleArea($name, $width, $height) 
{
    // calculate area of the rectangle
    $area = $width * $height;

    // output name and area of the rectangle to screen
    echo "Area of the $name is $area \n";
}

// call the function by passing values as arguments
calRectangleArea("Rectangle A", 10, 10);

// call the function by passing variables as arguments
$rectName = "Rectangle B";
$widthOfB = 5;
$heightOfB = 9;
calRectangleArea($rectName, $widthOfB, $heightOfB);
