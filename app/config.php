<?php
namespace App;
class Config{
    const ENV = "dev";
    const DB = [
        "driver"  => "mysql",
        'host'    => 'localhost',
        'dbname'  => 'mydatabase',
        'port'    => '3306',
        'charset' => 'utf8mb4',
        'user'    => 'root',
        'pass'    => ''
    ];
}
//$config = ["env" => "dev"];
