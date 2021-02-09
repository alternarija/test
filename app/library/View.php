<?php
namespace App\Library;

class View
{

    public static function render($admin, $view, $var = array()){

        if(count($var) > 0){

            foreach($var as $k=>$v){

                if(strlen($k) > 0){
                    ${$k} = $v; //variable
                }
            }
        }

        $view_path = ($admin) ? VIEW_ADMIN_PATH : VIEW_MASTER_PATH;

        

        if(file_exists($view_path . $view . ".php")){

           

            require_once $view_path . $view . ".php"; //include view

         

        }else{

            throw new \Exception();
        }

    }
}
