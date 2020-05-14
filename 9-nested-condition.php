<?php
$num = 99;
$sex = "Male";

if ($num >= 50 && $num <= 100) {
    if ($sex == "Male") {
        echo "boys 100!";
    } else {
        echo "girls";
    }
} elseif ($num < 50 && $num >= 0) {
    if ($sex == "Female") {
        echo "Girl 50";
    } else {
        echo "boys";
    }
} else {
    "Invalid";
}