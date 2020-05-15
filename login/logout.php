<?php

session_start();

session_destroy();

unset($_COOKIE['email']);
setcookie('email', $email, -time() + (86400 * 30));

header("location: index.php");