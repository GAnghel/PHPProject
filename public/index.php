<?php
require_once "../app/config.php";
require_once "../app/routes.php";
require_once "../vendor/autoload.php";
//require_once "../src/Router.php";
//use Tracy\Debugger;


//Debugger::enable(Debugger::PRODUCTION);

ini_set("extension_dir", 'C:\xampp\php\ext');
ini_set("error_log", __DIR__."/../logs/error.log");
ini_set("display_errors", "off");

if(\App\Config::ENV === 'dev'){
    ini_set("display_errors", "on");
    error_reporting(E_ALL);
    //Debugger::enable(Debugger::DEVELOPMENT);
}
// var_dump($_SERVER);
//phpinfo();

//var_dump helper functions
//bd-> dump in the debugging bar
function bd($data) {
    bdump($data);
}
//dd-> dump on the page and die
function dd($data) {
    dump($data);
    die();
}

// $router = new Framework\Router($routes);
// $router->getResource($_SERVER['REQUEST_URI']);

//handling url case by case
//take out the controller name from routes array
$url = $_SERVER["REQUEST_URI"];// ex. /user/23?page=2, REQUEST_URI imi da string-ul /user/
$queryStr = $_SERVER["QUERY_STRING"];// QUERY_STRING imi da ?page=2 routare dinamica
$router = new Framework\Router($routes);
$router->handle($url, $queryStr);