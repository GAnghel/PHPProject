<?php

namespace App\Controllers;

class UserController extends \Framework\BaseController
{
public function index(){
    return $this->view("user/index.html");
}
public function show($id){

}
}
