<?php
	
class ControllerFactory extends BaseFactory {
			
	public static function run($router, $params, $class=null) {
		
		if ($class==null) {
			$class="CMSController";
		}
		
		$controller = new $class($router, $params);
		/*
		try {
			
		} catch (NotFoundException $e) {
			$router->notFound();
		} catch (Exception $e) {
			$router->error(500);
		}
		*/
		
	}
}
	
?>