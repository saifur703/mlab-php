<?php

/** 
 * gettype 
 * print_r 
 * var_dump 
 */

$a = "Saifur";
$b = 12;
$c = 23.65;
$d = ["Saifur Rahman", "Hello", "World"];
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

print_r($d);

echo gettype($a);