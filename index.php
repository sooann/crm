<?php

	//include_once "global.php";

	$_SESSION["intUserURN"]=NULL;

	//init Doctrine2 DBAL
	use Doctrine\Common\ClassLoader;
	require 'Doctrine/Common/ClassLoader.php';
	$classLoader = new ClassLoader('Doctrine', '/');
	$classLoader.register();
	
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
	require 'Slim/Slim.php';
	
	//Do not require autoloader due to Doctrine Autoloader 
	//\Slim\Slim::registerAutoloader();

	//setting global variable for slim framework
	
	$app = new \Slim\Slim();
	
	$app->get('/hello/:name', function ($name) {
		echo "Hello, $name";
	});

	$app->run();

?>
