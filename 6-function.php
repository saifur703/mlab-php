<?php

/** 
 * Function 
 * Parameter 
 * Argument
 */

function title()
{
    return "This is title";
}
function welcome($name = "saifur rahman")
{
    return "Welcome to " . ucwords($name);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title(); ?></title>
</head>

<body>
    <h2><?php echo welcome(); ?></h2>
    <h2><?php echo welcome("Hello world"); ?></h2>
</body>

</html>