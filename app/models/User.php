<?php
namespace App\Models;

use App\Database\ActiveRecord;
use App\Library\Session;

class User extends ActiveRecord
{
    public $id, $name, $password, $is_admin;
    static $key = 'id';
    static $table = 'users';

    public static function login($n,$p){

        $name = htmlspecialchars(trim($n),ENT_QUOTES);
        $pass = md5(htmlspecialchars(trim($p),ENT_QUOTES));

        $user = self::get("where name = '{$name}' AND password = '{$pass}' AND is_admin = 1  LIMIT 1");
       
        if(count($user) == 1){
            $user[0]->setSession();
            return $user[0];
        }else{
            return null;
        }
    }

    public static function logout(){

        Session::destroy('status');
    }

    public function setSession(){

        Session::setkey('status',$this->is_admin);
        Session::setkey('name', $this->name);
    }
}