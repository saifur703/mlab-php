<?php

/** 
 * Data types 
 * 
 * String 
 * Number 
 * - Integer 
 * - Float / Double
 * Boolean 
 * Array
 * Object 
 * Resources
 * Null
 */

// String 
$text = "Saifur Rahman";
echo gettype($text), " - ", $text;
echo "<br/>";

// Integer 
$i = 40;
echo gettype($i), " - ", $i;
echo "<br/>";

// Float 
$f = 45.9865432;
echo gettype($f), " - ", $f;
echo "<br/>";

// Boolean - true / false 
$b1 = true;
echo gettype($b1), " - ", $b1, "<br/>"; // 1 
$b2 = false;
echo gettype($b2), " - ", $b2 . "<br/>"; // 0

// Array
$arr = ["Hello Saifur", "BD", "Comilla"];
echo gettype($arr), " - ", $arr[0], "<br/>";

// Null 
// NULL is a variable that has no value assigned to it
$n;
echo gettype($n);