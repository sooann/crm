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

$app->run();
	
?>