<?php

	//include_once "global.php";
	$_SESSION["intUserURN"]=NULL;
	
	//setting global variable
	global $conn,$app; 

	//init Doctrine2 DBAL
	require 'Doctrine/Common/ClassLoader.php';
	$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', '.');
	$classLoader->register();
	
	$dbConfig = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname' => 'CRMSGP',
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
	
	$app->get('/dbtest/:funcname', function ($funcname) use ($app,$conn) {
		$sm = $conn->getSchemaManager();
		eval("\$result=\$sm->$funcname();");
		print_r($result);
	});
	
	$app->get('/dbmap', function () use ($app,$conn) {
		$dmClassLoader = new \Doctrine\Common\ClassLoader('DBmapper','.');
		$dmClassLoader->register();
		$dm = new \DBmapper\DBmapper ($conn);
		$dm->test(); 
	});

	$app->run();

?>
