<?php
session_start();
if (isset($_SESSION['email']) || isset($_COOKIE['email'])) {
    header("location: ./dashboard.php");
}

if (isset($_POST['login'])) {
    define("EMAIL", "saifur703@gmail.com");
    define("PASSWORD", "1234");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = isset($_POST['check']) ? $_POST['check'] : NULL;
    if ($email == EMAIL) {
        if ($password == PASSWORD) {
            $_SESSION['email'] = $email;

            if (isset($check)) {
                setcookie('email', $email, time() + (86400 * 30)); // 86400 = 1 day; 
            }
            header("location: dashboard.php");
        } else {
            $pass = "<p style='color: red;'>Password is not matching. Please Try again</p>";
        }
    } else {
        $em = "<p style='color: red;'>Email is not matching. Please Try again</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <link rel="stylesheet" href="login/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <div class="login-box">
                    <h2>Login </h2>

                    <form action="" method="POST">

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email">
                        <?php if ($email != EMAIL) {
                            echo $em;
                        } ?>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your Password">
                        <?php if ($password != PASSWORD) {
                            echo $pass;
                        } ?>
                        <div class="float-right">
                            <input type="checkbox" name="check" id="check">
                            <label for="check" class="label-inline">Accept Cookies</label>
                        </div>
                        <button class="button-primary" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>