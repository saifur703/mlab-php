<?php
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variable</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <h2>Form POST Method</h2>
                <form action="" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email">

                    <input type="submit" value="Submit" class="button">
                </form>

                <?php if (!empty($name) || !empty($email)) : ?>
                <div class="result">
                    <h3>Output: </h3>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        <tr>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                        </tr>
                    </table>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>