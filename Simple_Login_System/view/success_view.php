<?php 

require "../control/login_contr.php";
require "extras/header.php";
?>

<body>
    <div class="container">
        <div class="container2">
            <h1 class="title">Welcome <?php echo $val_username; ?></h1>
            <h4><?php echo "Your account has been reactivate.";  ?> </h4> <br>

            <form action="../view/login_view.php">
                <h5>Click this button to go back in the log in page.</h5><br>
                
                <button class="back" type="submit">Go Back</button>
            </form>
        </div>
    </div>
</body>
</html>