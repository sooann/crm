<?php

	//include_once "global.php";

	$_SESSION["intUserURN"]=NULL;

	//init slim framework
	require 'Slim/Slim.php';
	\Slim\Slim::registerAutoloader();

	//setting global variable for slim framework

	$app = new \Slim\Slim();
	
	$app->get('/hello/:name', function ($name) {
		echo "Hello, $name";
	});

	$app->run();

?>
