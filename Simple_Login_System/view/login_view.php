<?php

require "../control/login_contr.php";
require "extras/header.php";
?>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container">
            <div class="container2">
                <div>
                    <div class="title">
                        <h1>Simple Login System</h1>
                    </div>

                    <h4>Please Login</h4>

                        <div class="red">
                            <?php if (isset($error_message)) { ?>
                            <p><?php echo $error_message; ?></p>
                            <?php } ?>
                        </div>
                </div>

                <label for="username">Username: </label>
                <input type="text" id="username" name="username"> <br> <br>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password"> <br> <br> <br>

                <button class="login" type="submit">Login</button>
            </div>
        </div>
    </form>
</body>
</html>