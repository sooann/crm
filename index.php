<?php

	//include_once "global.php";

	$_SESSION["intUserURN"]=NULL;

	//init Doctrine2 DBAL
	require 'Doctrine/Common/ClassLoader.php';
	$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', '.');
	$classLoader->register();
	
	$dbConfig = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname' => 'crmsgp',
		'user' => 'root',
		'password' => 'sooann',
		'host' => 'localhost',
		'driver' => 'pdo_mysql',
	);
	
	$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $dbConfig);

	//init slim framework
	
	//Do not require autoloader due to Doctrine Autoloader 
	//require 'Slim/Slim.php';
	//\Slim\Slim::registerAutoloader();
	
	//Configure doctrine autoloader to load slim library
	$slimClassLoader = new \Doctrine\Common\ClassLoader('Slim', '.');
	$slimClassLoader->register();

	//setting global variable for slim framework
	
	$app = new \Slim\Slim();
	
	$app->get('/hello/:name', function ($name) {
		echo "Hello, $name";
	});

	$app->run();

?>
