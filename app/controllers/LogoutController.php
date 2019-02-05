<?php
namespace App\Controllers;

use Framework\BaseController;

class LogoutController extends BaseController{
    public function logoutAction(){
        return $this->view("default/index.html");
    }
}