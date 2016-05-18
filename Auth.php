<?php

require '../Log.php';

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password){
        // this creates an instance of log to access log.php file. 
        $log = new Log;
        //this is a yes no question.
        if ($username === 'guest' && password_verify($password, self::$password)){
            $_SESSION['logged_in_user'] = $username;
            return true;
            // die;
        } else {
            $message = "User $username failed to log in!";
            return false;
        }
    }
     
    public static function authCheck(){
        return isset($SESSION['logged_in_user']);  
        //this is only a yes or no question.   
    }

    public static function userCheck(){
        if (isset($_SESSION['logged_in_user'])){
            return $_SESSION['logged_in_user'];
        }
    }
    public static function logout(){
        //clears the session
        session_destroy();
        //the below creates a new session file
        session_regenerate_id();
        //these two MUST go together.
    }
}
        // Self::attempt($username, $password)