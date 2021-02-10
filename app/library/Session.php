<?php
namespace App\Library;

class Session
{
    public static function start(){

        if(!isset($_SESSION)){
            
            session_start();
        }
    }

    public static function setKey($k,$v){

        self::start();

        $_SESSION[$k] = $v;

    }

    public static function getKey($k,$default=null){
        
        self::start();

        if(!isset($_SESSION[$k])){

            return $default;
        }else {
            return $_SESSION[$k];
        }
    }

    public static function destroy($k){

        self::start();

        if(isset($_SESSION[$k])){

            unset($_SESSION[$k]);
        }
        session_destroy();
    }

}
