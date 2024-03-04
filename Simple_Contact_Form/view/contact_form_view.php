<?php include "../control/contact_form_contr.php" ?>
<?php include "header.php";?>

<body>
    <div>
        <div class="container">
            <h1>Contact Form View</h1>

            <div>
                <form action="" method="POST">
                    <div class="title">
                        <h2>Put your information here:</h2>
                    </div>

                    <div class="container2">
                        <label for="">Name:</label>
                        <input type="text" name="name"> <br>

                        <label for="">Email:</label>
                        <input type="text" name="email"> <br><br><br>

                        <div class="message">
                            <label for="">Your Message:</label><br>
                            <textarea name="message" id="" cols="50" rows="10" placeholder="Write your message here"></textarea><br><br>

                            <button class="button" type="submit">Submit</button>
                            <button class="button" type="submit" name="reset" value="reset">Reset</button>
                        </div>
                    </div> 

                    <div class="container-result">
                        
                    </div>
                </form>
            </div>
        </div>

        <div class="container5">
            <div>
                <?php if (isset($getAll)) { ?>
                    <p><?php echo $getAll; ?></p>
                    <?php } ?>

                <div class="error">
                    <?php if (isset($nameErr)) { ?>
                    <p><?php echo $nameErr; ?></p>
                    <?php } ?>

                    <?php if (isset($emailErr)) { ?>
                    <p><?php echo $emailErr; ?></p>
                    <?php } ?>

                    <?php if (isset($messageErr)) { ?>
                    <p><?php echo $messageErr; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php";?>
