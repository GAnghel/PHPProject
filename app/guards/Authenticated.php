<?php
namespace App\Guards;
use Framework\Guard;

class Authenticated implements Guard
{
    protected $connection;
    public function handle(array $params = null)
    {
        session_start();
        if (!isset($_SESSION['uname'])) {
            $this->reject();
        }
        if (!isset($_SESSION['psw'])) {
            $this->reject;
        }
    }

    public function reject()
    {
        header("Location: /auth/login");
    }
}