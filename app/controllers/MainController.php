<?php 
namespace App\Controllers;

use App\Library\View;

abstract class MainController
{

    public function getView($admin = false, $view, $var = null){

        
        try{

            View::render($admin, $view, $var);

        }catch(\Exception $e){
            
            $this->error();
            

        }
    }

    public function error(){
        // TODO
        $var = [];
        
        echo "error";
        /*$error = new errorController();
        $error->index();*/
    }

}