<?php
//PATHS
define("PATH" , $_SERVER["DOCUMENT_ROOT"] . "/test/");//za windows sistem
//define("PATH" , dirname(__FILE__,2) . "/");
define("APP_URL" , "http://localhost/test");

define("CONTROLLER_PATH" , PATH . "app/controllers/");
define("MODEL_PATH" , PATH . "app/models/");
define("VIEW_PATH" ,  PATH . "app/views/");
define("LIBRARY_PATH" , PATH . "app/library/");


//DB
define("HOST","localhost");
define("DBNAME","test");
define("USER","root");
define("DSN", "mysql:host=" . HOST . ";dbname=" . DBNAME );
define("PASS","");

require "vendor/autoload.php";