<?php

require 'vendor/slim/Slim.php';

$app = new Slim();

$app->map('/hello/:name', function($name) {
echo "Hello, $name";
?>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
	<input type="submit" value="GO" />
</form>
<?php
})->via('GET','HEAD','POST');

$app->map('/servervariable$', function() {
	servervariables();
})->via('GET','HEAD','POST');

$app->get('/hello1/:name', function ($name) {
echo "Hello, $name!";
})->conditions(array('name' => '\w+'));

$app->run();

function servervariables () {
	echo "<h1>\$_SERVER</h1>";
	foreach ($_SERVER as $key => $value) {
		echo $key . " : " . $value . "<br />";
	}
	echo "<h1>\$_REQUEST</h1>";
	foreach ($_REQUEST as $key => $value) {
	
		echo $key . " : " . $value . "<br />";
	}
	echo "<h1>\$_GET</h1>";
	foreach ($_GET as $key => $value) {
	
		echo $key . " : " . $value . "<br />";
	}
	echo "<h1>\$_POST</h1>";		
	foreach ($_POST as $key => $value) {
	
		echo $key . " : " . $value . "<br />";
	}
}

	
?>