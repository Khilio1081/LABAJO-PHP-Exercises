<?php 
namespace View;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Current Date and Time in Various Format</title>
</head>
<body>
    <div>
    <h2>Select Time Zone:</h2>

    <form method="get">
        <div>
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
