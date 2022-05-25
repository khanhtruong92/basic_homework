<?php
$students = [
    "John" => 18,
    "Emma" => 17,
    "Bob" => 15
];
$students["Sophia"] = 16;
$students["Bob"] = 20;
// var_dump($students);
// print_r($students);
foreach ($students as $name => $age) {
    echo "$name is $age years old <br>";
}
