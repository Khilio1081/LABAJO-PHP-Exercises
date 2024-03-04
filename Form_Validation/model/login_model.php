<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST ["username"];
    $password = $_POST ["password"];

    if ($username === $val_username && $password === $val_password) {
        header ("Location: ../view/success_view.php");
        exit;
    } else {
        $error_message = "Username and password doesn't match!!!";
    }

    if(empty($_POST["username"])){
        $usernameErr = "Please fill your Username!";
    } else {
        $username = $_POST["username"];
    }

    if(empty($_POST["password"])){
        $passwordErr = "Please fill your Password!";
    } else {
        $password = $_POST["password"];
    }
}
