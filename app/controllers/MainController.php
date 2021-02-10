<?php 
namespace App\Controllers;

use App\Library\View;

class MainController
{

    public function getView($view, $var = []){

        
        try{

            View::render($view, $var);

        }catch(\Exception $e){
            
            $this->error();
            

        }
    }

    public function show(){
        
    }

    public function error(){
        // TODO
        $var = [];
        
        echo "error";
        /*$error = new errorController();
        $error->index();*/
    }

}