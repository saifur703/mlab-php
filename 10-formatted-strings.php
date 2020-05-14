<?php

/** 
 * Formatted Strings
 * 
 * printf - echo
 * sprintf - return
 */

$fname = "Saifur";
$lname = "Rahman";
printf("My Name is %s %s", $fname, $lname);

echo "\n";

$fullName = $fname . " " . $lname;
$output = sprintf($fullName);
echo $output;