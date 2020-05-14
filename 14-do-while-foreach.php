<?php

/** 
 * do while loop
 * foreach loop
 */
$i = 1;
do {
    echo $i;
    $i++;
    echo PHP_EOL;
} while ($i <= 5);

echo PHP_EOL;

$arr = ["Hello", "Saifur", "BD", 24];
foreach ($arr as $info) {
    echo $info . "\n";
}

$arr2 = [
    "fname" => "Saifur",
    "lname" => "Rahman",
    "class" =>  14,
    "city"  =>  "Comilla",
];
foreach ($arr2 as $key => $value) {
    printf("%s = %s\n", $key, $value);
}