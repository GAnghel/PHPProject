<?php
require_once "../app/config.php";
require_once "../app/routes.php";
require_once "/../vendor/autoload.php";

require_once "../src/Router.php";

ini_set("extension_dir", 'C:\xampp\php\ext');
ini_set("error_log", __DIR__."/../logs/error.lo");
ini_set("display_errors", "off");
if($config["env"] == "dev"){
    ini_set("display_errors", "on");
    error_reporting(E_ALL);
}
var_dump($_SERVER);
phpinfo();

$url = $_SERVER["REQUEST_URI"];// ex. /user/23?page=2, REQUEST_URI imi da string-ul /user/
$queryStr = $_SERVER["QUERY_STRING"];// QUERY_STRING imi da ?page=2 routare dinamica
$router = new Router();
$router->handle($url, $queryStr);

//handling url case by case
//take out the controller name from routes array

