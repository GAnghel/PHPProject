<?php


class Router {
    public function __construct(){

    }
    public function handle($url, $queryStr){
        require_once "../app/controllers/PageController.php";
        if($this->match_uri($url)){
            $controller = $routes[$url]["controller"];
            $pageController = new $controller();
            $pageController->{$routes[$url]["action"]}();
        }
    }

    public function match_uri($url) : bool{
            if(isset($routes[$url])){
                return true;
        }
       return false;
    }
}