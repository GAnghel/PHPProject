<?php
namespace App\Controllers;
use \Framework\Utils\File;


class IndexController{
    function indexAction(){
        $fileService = new File();
        $user = new \App\Models\User();
    }
}