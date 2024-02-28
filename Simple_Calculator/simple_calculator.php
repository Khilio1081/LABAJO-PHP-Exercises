<?php require "myphp.php" ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>

</head>
<body>

<div class="container">
    <h1>Simple Calculator</h1>
    <form action="simple_calculator.php" method="post">
        <label>First Number:</label>
        <input type="number" name="num1">

        <br><br>

            <select name="op" id="op">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>

        <br><br>

        <label>Second Number:</label>
        <input type="number" name="num2"><br><br>
        <input class="but" type="submit" name="submit" value="Calculate"><br><br>
        <div class="result">
            <?php
                if (isset($result)) {
                    echo "Result: <h2>$result</h2>";
                }
            ?>
        </div>
    </form>
</div>


</body>
</html>