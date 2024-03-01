<?php

Class Form{
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message){
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getAll(){
        if(!empty($_POST["name"] || $_POST["email"] || $_POST["message"])){
            return "<h1>Your Personal Information: </h1><br>
            Your name is <b>$this->name</b> <br>
            Your email is <b> $this->email</b> <br>
            Your message is... <b> $this->message</b>";
        }
    }
}


require "../model/contact_form_model.php";






