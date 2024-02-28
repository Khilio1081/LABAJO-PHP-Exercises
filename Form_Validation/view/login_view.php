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
                            <h1>Simple Login System</h1> <br>
                        </div>
                        <h4>Please Login</h4>
                            <div class="red">
                                <?php if (isset($error_message)) { ?>
                                <p><?php echo $error_message; ?></p>
                                <?php } ?>

                                <?php if (isset($usernameErr)) { ?>
                                <p><?php echo $usernameErr; ?></p>
                                <?php } ?>

                                <?php if (isset($passwordErr)) { ?>
                                <p><?php echo $passwordErr; ?></p>
                                <?php } ?>
                            </div>
                    </div>

                    <label for="username"><b>Username: </b></label>
                    <input type="text" id="username" name="username"> <br> <br>

                    <label for="password"><b>Password: </b></label>
                    <input type="password" id="password" name="password"> <br> <br> <br>

                    
                    <button class="login" type="submit">Login</button>
                </div>
        </div>
        <div class="char">
                <img src="../boy.png" alt="lalaki ako" width="300" height="660">
        </div>
    </form>
</body>
</html>