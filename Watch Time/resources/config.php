<?php

ob_start();//sends requests to php at the same time
session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR); //If DS is defined apply null to DS if not make it DS



 defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front"); 
//this is for referering to the front folder

 defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__. DS . "templates/back");
//this is for referering to the back folder





 defined("DB_HOST") ? null : define("DB_HOST", "localhost");

 defined("DB_USER") ? null : define("DB_USER", "root");

 defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");

 defined("DB_NAME") ? null : define("DB_NAME", "yugioh_db");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

require_once("functions.php");

?>