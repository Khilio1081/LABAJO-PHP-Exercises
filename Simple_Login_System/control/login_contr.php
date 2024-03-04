<?php

class Login {
    public $username;
    public $password;

    public function getName() {
        return $this->username;
    } 
}

$val_username = "MaryJane01";
$val_password = "admin123";

$obj = new Login();

$user = $obj->getName();

require "../model/login_model.php";
