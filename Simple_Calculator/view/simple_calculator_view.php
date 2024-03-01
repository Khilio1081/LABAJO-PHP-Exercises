<?php require "../control/simple_calculator_contr.php"; ?>
<?php require "header.php"; ?>


<div class="container">
    <h1>Simple Calculator</h1>
    <form action="" method="post"> 
        <label>First Number:</label>
        <input type="number" name="num1">

        <br><br>

            <select name="op">
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
                if (isset($calculate)) {
                    echo "Result: <h2>$calculate</h2>";
                }
            ?>
        </div>
    </form>
</div>
<?php require "footer.php"; ?>