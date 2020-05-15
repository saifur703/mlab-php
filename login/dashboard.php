<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_COOKIE['email'])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Welcome to Dashboard</h1>

                <p>Your Email is: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : NULL; ?></p>
                <p>Cookie: <?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : NULL; ?></p>

                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>