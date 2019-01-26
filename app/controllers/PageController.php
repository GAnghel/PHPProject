<?php
namespace App\Controllers;

use Framework\BaseController;

class PageController extends BaseController{
    public function aboutUsAction(){
        return $this->view("pages/about-us.html");
    }
}