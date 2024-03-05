<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/my.css">
    <title>Display Current Date and Time in Various Format</title>
</head>
<body>
    <div class="container">
    <h2>Select Time Zone:</h2>

        <form method="get">
            <div class="container2">
                <?php include "../control/date_and_time_contr.php"; ?>

            </div>

            <select name="timezone">
                <option value="Asia/Manila">Philippines</option>
                <option value="Asia/Tokyo">Japan</option>
                <option value="Australia/Sydney">Australia</option>
                <option value="Asia/Kolkata">India</option>
            </select>

            <input type="submit" value="Display">
        </form>
    </div>
</body>
</html>