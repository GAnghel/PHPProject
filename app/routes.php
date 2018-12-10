<?php
$routes = [
            "/" => ["controller" => "IndexController", "action" => "index"],
            "post" => ["controller" => "PostController", "action" => "save"],
            "/page/about-us" => ["controller" => "PageController", "action" => "aboutUsAction"],
            "/user/{id}" => ["controller" => "UserController", "action" => "showAction"]
          ];