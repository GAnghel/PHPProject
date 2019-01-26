<?php
namespace Framework;

class Router {
    protected $routes;
    public function __construct($routes){
        $this->routes = $routes;
    }
    public function handle($url, $queryStr){
    
        if($this->match_uri($url)){
            $controller = $this->routes[$url]["controller"];
            $controllerName = "App\\controllers\\".$controller;
            $this->checkGuard($url);
            $pageController = new $controllerName();
            $pageController->{$this->routes[$url]["action"]}();
        }
    }

    public function match_uri($url) : bool{
            if(isset($this->routes[$url])){
                return true;
        }
       return false;
    }

    private function checkGuard(string $route): void{
        if(isset($this->routes[$route]['guard'])) {
            $guard = "\\App\\Guards\\".$this->routes[$route]['guard'];
            //instantiate and execute the handle action
            (new $guard)->handle();
        }
    }
}