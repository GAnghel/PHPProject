<?php
namespace App\Controllers;

use Framework\BaseController;

class PostController extends BaseController{
    public function save(){
        $user = new \App\Models\User();
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["uname"];
        $pass = $_POST["psw"];
        $pass_repeat = $_POST["psw-repeat"];
        if($pass === $pass_repeat){
            if($user->register( $fname,  $lname,  $username,  $email,  $pass) === true){
                echo 'User succesfully registered';
                return $this->view("register/register.html");
            }
        }
    }
}