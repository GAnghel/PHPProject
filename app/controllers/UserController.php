<?php

namespace App\Controllers;

use Framework\Controller;
use App\Models\User;

class UserController extends \Framework\BaseController
{
public function showAction($id){
        $user = (new User)->get($id);

        return $this->view('user/show.html', ["user" => $user]);
        
}
}
