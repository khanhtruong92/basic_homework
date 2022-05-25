<?php
// $fruits = array("Orange", "Apple", "Lemon");
$fruits = ["Orange", "Apple", "Lemon"];
// print_r($fruits);
// echo $fruits[1];
// $totalFruits = count($fruits);
// echo $totalFruits;
// for ($i = 0; $i < $totalFruits; $i++) {
//     echo $fruits[$i] . "<br>";
// }
// var_dump($fruits);

foreach ($fruits as $a => $fruit) {
    echo $a . "<br>";
    echo $fruit . "<br>";
}
