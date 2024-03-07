<?php

namespace login_model;

class LoginModel {
    public $username;
    public $password;

    public function getName() {
        return $this->username;
    } 
}

$val_username = "MaryJane01";
$val_password = "admin123";

$obj = new LoginModel();

$user = $obj->getName();

use login_contr\LoginController;


