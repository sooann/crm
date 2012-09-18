<?php

include_once "global.php";

$_SESSION["intUserURN"]=NULL;

$router = new RouterFactory();
$router->run();

?>