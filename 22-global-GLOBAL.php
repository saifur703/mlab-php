<?php

$x = 5;
$y = 12;
function add()
{
    global $x;
    global $y;
    $sum = $x + $y;

    return $sum;
}
echo add();

echo PHP_EOL;

function add2()
{
    $GLOBALS['x'];
    $GLOBALS['y'];
    $sum = $GLOBALS['x'] + $GLOBALS['y'];

    return $sum;
}
echo add2();