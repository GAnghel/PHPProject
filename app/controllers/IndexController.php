<?php
namespace App\Controllers;
use \Framework\Utils\File;


class IndexController extends \Framework\BaseController{
    public function indexAction(){
        return $this->view("user/index.html");
    }
}