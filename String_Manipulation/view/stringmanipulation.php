<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>String Manipulation</title>
</head>
<body>

<div class="container">

    <div class="title">
        <h1>String Manipulation</h1>
    </div>

    <div class="main">
        <?php
            echo "<b>Word of the Day: </b><br> " . " <u>" . $result1 . "</u><br><br>";
            echo "<b>Lenght of the word: </b><u>" . $result2 . "</u><br><br>";
            echo "<b>Word count: </b><u>" . $result3 . "</u><br><br>";
            echo "<b>Reverse word: </b><u>" . $result4 . "</u><br><br>";
            echo "<b>String position of "$addedLetter": </b><br><u>" . $result5 . "</u><br><br>";
            echo "<b>Replace "$replacing" to "$replace" </b><br><u>" . $result6  . "</u><br><br>";
        ?>
    </div>
</div>
</body>
</html>