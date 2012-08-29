<?php

//Propel DAO init
$strDBRegion = "SGP";
require_once 'vendor/propel/runtime/lib/Propel.php';
Propel::init("build/conf/CRM".$strDBRegion."-conf.php");
set_include_path("build/classes" . PATH_SEPARATOR . get_include_path());

//register main autoload class
require 'build/autoloader/autoloader.php';
spl_autoload_register('__autoload');

$_SESSION["intUserURN"]=NULL;

$router = new RouterFactory();
$router->run();

?>