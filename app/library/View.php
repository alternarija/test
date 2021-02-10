<?php
namespace App\Library;

class View
{

    public static function render($view, $var = array()){

        if(count($var) > 0){

            foreach($var as $k=>$v){

                if(strlen($k) > 0){
                    ${$k} = $v; //variable
                }
            }
        }

        //$view_path = ($admin) ? VIEW_ADMIN_PATH : VIEW_MASTER_PATH;

        

        if(file_exists(VIEW_PATH . $view . ".php")){

           

            require_once VIEW_PATH . $view . ".php"; //include view

         

        }else{

            throw new \Exception();
        }

    }
}
