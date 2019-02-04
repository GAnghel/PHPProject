<?php
$routes = [
            "/" => ["controller" => "IndexController", "action" => "indexAction"],
            "/loginAction" => ["controller" => "LoginController", "action" => "loginAction"],
            "/registerAction" => ["controller" => "RegisterController", "action" => "registerAction"],

            "post" => ["controller" => "PostController", "action" => "save"],
            "/page/about-us" => ["controller" => "PageController", "action" => "aboutUsAction"],
            "/user/edit/{id}" => ["controller" => "UserController", "action" => "showAction", "guard" => "Authenticated"],
          ];