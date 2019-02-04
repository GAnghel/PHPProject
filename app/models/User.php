<?php

namespace App\Models;
use Framework\Model;

class User extends Model
{
    protected $table = 'credentials';
    function validate(string $username, string $pass) : bool
    {
        $result = $this->executeStatement("SELECT * FROM $this->table WHERE Username = ?", [$username]);
        $isPassOk = false;
        if($pass == $result->Password){
            $isPassOk = true;
        }
        return $isPassOk;
    }
    function register( string $fname, string $lname, string $uname, string $email,string $pass) : bool{
        $credentialsResult = $this->executeStatement("INSERT INTO $this->table VALUES", [$uname], [$email], [$pass]);
        $lastInsertedID = $credentialsResult->CredentialsID;
        $table = 'user';
        if($lastInsertedID > 0){
            $userResult = $this->executeStatement("INSERT INTO $this->table VALUES", [$fname], [$lname], [$lastInsertedID], [1]);
        } else {
            return false;
        }
        return true;
    }
    function sessionStarter($result)
    {
        session_start();
        $_SESSION["username"] = $result["User"]; //se salveaza in session, va fi disponibil mereu in aplicatie
        echo "Private page";
    }
}
