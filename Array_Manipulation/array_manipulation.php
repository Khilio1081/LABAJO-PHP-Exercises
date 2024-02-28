<?php require "myphp.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulation</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Array Manipulation</h1>
        </div>

        <div class="content">
            <?php
                ascend($numbers);
                echo "<br><br>";
            ?>
            <?php
                descend($numbers);
            ?>

        </div>
    </div>
</body>
</html>