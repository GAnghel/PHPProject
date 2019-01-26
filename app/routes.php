<?php
$routes = [
            "/" => ["controller" => "IndexController", "action" => "indexAction"],
            "post" => ["controller" => "PostController", "action" => "save"],
            "/page/about-us" => ["controller" => "PageController", "action" => "aboutUsAction"],
            "/user/edit/{id}" => ["controller" => "UserController", "action" => "showAction", "guard" => "Authenticated"]
          ];