<?php
namespace App\Models;
use Framework\Model;

class User extends Model
{
    protected $table = 'credentials';
    function validate(string $username, string $pass) : bool
    {
        $result = $this->find([$username]);
        $isPassOk = false;
        if($pass == $result->Password){
            $isPassOk = true;
        }
        return $isPassOk;
    }
    function register( string $fname, string $lname, string $uname, string $email, string $pass) : bool{
        $credentialsID = $this->new(["Username"=>$uname, "E-mail"=>$email, "Password"=>$pass]);
        $table = 'user';
        $active = 1;
        if($credentialsID > 0){
            $userResult = $this->new(["FirstName"=>$fname, "LastName"=>$lname, "CredentialsID"=>$credentialsID, "active"=>$active]);
        } else {
            return false;
        }
        return true;
    }
    
}
