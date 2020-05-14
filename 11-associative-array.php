<?php

// Normal Array 
$arr = [1, 2, 3, 4, 5];
echo $arr[2]; // 3 - index number 

echo PHP_EOL;

// Associative Array 
$arr2 = [
    "fname" => "Saifur",
    "lname" =>  "Rahman",
    "age"   =>  24,
    "country" => "BD"
];
echo $arr2['fname'];

echo PHP_EOL;

foreach ($arr2 as $key => $value) {
    echo $key . ": " . $value . "\n";
}