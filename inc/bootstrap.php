<?php
define("PROJECT_ROOT_PATH", "C:\wamp64\www\API-Rest" );
// include main configuration file 
//echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require_once PROJECT_ROOT_PATH . "/inc/config.php";
// include the base controller file 
require_once PROJECT_ROOT_PATH . "/Controller/Api/BaseController.php";
// include the use model file 
require_once PROJECT_ROOT_PATH . "/Model/UserModel.php";
?>