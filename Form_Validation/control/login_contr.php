<?php
require "../model/login_model.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST ["username"]);
    $password = test_input($_POST ["password"]);

    if ($username === $val_username && $password === $val_password) {
        header ("Location: ../view/success_view.php");
        exit;
    } else {
        $error_message = "Username and password doesn't match!!!";
    }

    if(empty($_POST["username"])){
        $usernameErr = "Please fill your Username!";
    } else {
        $username = test_input($_POST["username"]);
    }

    if(empty($_POST["password"])){
        $passwordErr = "Please fill your Password!";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$user = $val_username;
