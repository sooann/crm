<?php
// ** MySQL settings ** //
//define('DB_NAME', 'northwind');    // The name of the database
//define('DB_HOST', 'localhost');    // 99% chance you won't need to change this value

//disable settings. 
//define('DB_DSN','mysql:host=localhost;dbname=crmsgp');
//define('DB_DSN','mysql:host=localhost;dbname=northwind');
//define('DB_USER', 'root');     // Your MySQL username
//define('DB_PASSWORD', ''); // ...and password

//retriving from propel variables
$propelconfig = Propel::getConfiguration();
//echo (str_replace("\n", "<br />", var_export($propelconfig["datasources"][$propelconfig["datasources"]["default"]]["connection"]["dsn"],true), $count));
define('DB_DSN',$propelconfig["datasources"][$propelconfig["datasources"]["default"]]["connection"]["dsn"]);
define('DB_USER', $propelconfig["datasources"][$propelconfig["datasources"]["default"]]["connection"]["user"]);
if (array_key_exists("password",$propelconfig["datasources"][$propelconfig["datasources"]["default"]]["connection"])) {
	define('DB_PASSWORD', $propelconfig["datasources"][$propelconfig["datasources"]["default"]]["connection"]["password"]);
} else {
	define('DB_PASSWORD', '');
}

define('ABSPATH', dirname(__FILE__).'/');
//require_once(ABSPATH.'tabs.php');
?>