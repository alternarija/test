<?php
namespace App\Library;

class Route
{
    private static $controller;
    private static $method;

    public static function get(){
        
        self::$controller = (isset($_GET['controller'])) ? ucfirst(strtolower(htmlspecialchars(trim($_GET['controller']),ENT_QUOTES))) . "Controller" : "ProductsController";
        self::$method = (isset($_GET['method'])) ? strtolower(htmlspecialchars(trim($_GET['method']),ENT_QUOTES)) : "show";
        
        self::checkIfExist();
        
        $ctr = "App\\Controllers\\" . self::$controller;
        $ctr = new $ctr;
        $method = self::$method;
        $ctr->$method();

    }

    public static function checkIfExist(){

        if(!file_exists(CONTROLLER_PATH . self::$controller . ".php")){
            
            self::$controller = "ProductsController";
        
        }
        if(!method_exists("App\\Controllers\\" . self::$controller, self::$method)){
            
            self::$method = "show";
        
        }
    }

}
