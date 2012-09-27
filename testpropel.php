<?php

global $strDBRegion;

$strDBRegion = "SGP";

//Propel DAO init
require_once 'vendor/propel/runtime/lib/Propel.php';
Propel::init("build/conf/CRM".$strDBRegion."-conf.php");
set_include_path("build/classes" . PATH_SEPARATOR . get_include_path());

$webpage = SysWebpageQuery::create()->findPk(4);

var_dump($webpage->getSysWebpagecolumns());
echo "<br /><br />";


$webpage->setSysWebpagecolumns();


?>