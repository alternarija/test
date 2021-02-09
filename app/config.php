<?php
//PATHS
define("PATH" , $_SERVER["DOCUMENT_ROOT"] . "/test/");//za windows sistem
//define("PATH" , dirname(__FILE__,2) . "/");
define("CONTROLLER_PATH" , PATH . "app/controllers/");
define("MODEL_PATH" , PATH . "app/models/");
define("VIEW_PATH" ,  PATH . "app/views/");
define("VIEW_MASTER_PATH" , VIEW_PATH . "master/");
define("VIEW_ADMIN_PATH" , VIEW_PATH . "admin/");
define("MASTER_INC_PATH" , VIEW_MASTER_PATH . "inc/");
define("ADMIN_INC_PATH" , VIEW_ADMIN_PATH . "inc/");
define("LIBRARY_PATH" , PATH . "app/library/");


//DB
define("HOST","localhost");
define("DBNAME","test");
define("USER","root");
define("DSN", "mysql:host=" . HOST . ";dbname=" . DBNAME );
define("PASS","");

require "vendor/autoload.php";