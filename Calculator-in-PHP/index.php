<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <style>
    body {
        background-color: skyblue;
        font-size: 16px;
    }

    .wrap h1 {
        font-size: 80px;
        color: skyblue;
    }

    .wrap {
        padding: 50px 25px;
        background-color: white;
        width: 70%;
        margin: 0 auto;
        margin-top: 25vh;
        border-radius: 10px;
    }

    .center {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="column column-50">
                    <h1>PHP Calculator</h1>
                </div>
                <div class="column column-50">
                    <form method="POST">
                        <input type="text" name="num1" placeholder="Enter 1st Number">
                        <input type="text" name="num2" placeholder="Enter 2nd Number">
                        <select name="operator">
                            <option hidden>Select</option>
                            <option value="add">+</option>
                            <option value="sub">-</option>
                            <option value="mult">x</option>
                            <option value="div">/</option>
                        </select>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="column center">
                    <h2><?php
                        $num1 = $_POST['num1'] ?? "";
                        $num2 = $_POST['num2'] ?? "";
                        $operator = $_POST['operator'] ?? "";
                        $submit = $_POST['submit'] ?? "";
                        if (isset($submit) && $num1 != "" && $num2 != "") {
                            if ($operator == "add") {
                                $sum = $num1 + $num2;
                                echo "{$num1} + {$num2} = {$sum}";
                            } elseif ($operator == "sub") {
                                $sub = $num1 - $num2;
                                echo "{$num1} - {$num2} = {$sub}";
                            } elseif ($operator == "mult") {
                                $mult = $num1 * $num2;
                                echo "{$num1} x {$num2} = {$mult}";
                            } elseif ($operator == "div") {
                                $div = $num1 / $num2;
                                echo "{$num1} / {$num2} = {$div}";
                            } else {
                                echo "Something went wrong.";
                            }
                        }

                        ?></h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>