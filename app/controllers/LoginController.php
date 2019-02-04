<?php
namespace App\Controllers;
use \App\Models;

class LoginController extends \Framework\BaseController{
    public function loginAction(){
        $user = new \App\Models\User();
        $username = $_POST["uname"];
        $pass = $_POST["psw"];
        if($user->validate($username, $pass)){
            return $this->view("user/show.html");
        } else {
            echo 'Login failed';
            return $this->view("default/index.html");
        }
    }
}