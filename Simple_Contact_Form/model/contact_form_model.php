<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $message = $_POST ["message"];

    $obj = new Form($_POST['name'], $_POST['email'], $_POST['message']);
    $getAll = $obj->getAll();


    if(empty($_POST["name"])){
        $nameErr = "Please fill your Name!";
    }

    if(empty($_POST["email"])){
        $emailErr = "Please fill your email!";
    }

    if(empty($_POST["message"])){
        $messageErr = "Please fill your message!";
    }
}