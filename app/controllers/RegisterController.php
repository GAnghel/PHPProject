<?php
namespace App\Controllers;
use Framework\BaseController as BaseController;

class RegisterController extends BaseController{
    public function registerAction(){
        return $this->view("register/register.html");            
    }
}