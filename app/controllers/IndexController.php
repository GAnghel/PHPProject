<?php
namespace App\Controllers;
use \Framework\Utils\File;


class IndexController extends \Framework\BaseController{
    public function indexAction(){
        // $fileService = new File();
        // $user = new \App\Models\User();
        return $this->view("user/index.html");
    }
}