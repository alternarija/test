<?php 
namespace App\Controllers;

use App\Controllers\MainController;
use App\Models\Comment;
use App\Models\User;
use App\Library\Session;

class AdminController extends MainController
{

    public function show(){
        
        if(Session::getKey('status') == 1){
            
            $comments = Comment::get("WHERE approved = 0 ");

            $var = ['comments' => $comments]; //variable for view

            $this->getView('admin/comments', $var);
        
        }else $this->loginShow();

        
        
        
    }

    public function loginShow(){

        $token = md5(microtime() . time() . uniqid());
        Session::setKey('token',$token);
        $var = ['token' => $token];
        $this->getView('admin/login', $var);
    }

    public function login(){
        $var =null;
        if(Session::getKey('status') == 1){
            
            $redirect = APP_URL . "/admin";
            header("Location: {$redirect}");
            exit();
        
        }

        
        if(isset($_POST['token']) && Session::getKey('token') != null && Session::getKey('token') == $_POST['token']){

            if(isset($_POST['btn_submit'])){

                if(!empty($_POST['name']) && !empty($_POST['pass'])){

                $user = User::login($_POST['name'],$_POST['pass']);
                    if($user){
                        
                        if($user->is_admin == 1){
                            $redirect = APP_URL . "/admin";
                            header("Location: {$redirect}");
                            exit();
                        }
                    }else $this->loginShow();

                }else $this->loginShow();

            }else $this->loginShow();

        }else $this->loginShow();
    }
}