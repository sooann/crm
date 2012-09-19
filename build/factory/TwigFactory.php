<?php

require_once "vendor/twig/Autoloader.php";
	
class TwigFactory extends BaseFactory {
	
	private static $declared = array();
	
	public static function run($webpage=null, $html=null) {
		//finalise html via template engine
		Twig_Autoloader::register();

		$loader = new Twig_Loader_String();
		$twig = new Twig_Environment($loader);
		$twig->addFilter('var_dump', new Twig_Filter_Function('var_dump'));
		$twig->addFunction('calldecl', new Twig_Function_Function(get_class().'::calldecl'));
		
		return $twig->render($html,array("params"=>$webpage->toArray()));
		
	}
			
	public static function calldecl($field) {
		
		$text = "";
		
		if (array_search($field, self::$declared)===false) {
			$SysDeclarations = SysDeclarationQuery::create()
					->filterByCode($field)
					->filterByActive(1)
					->find();
			if (!$SysDeclarations->isEmpty()) {
				foreach ($SysDeclarations as $SysDeclaration) {
					array_push(self::$declared, $field);
					$text .= $SysDeclaration->getHtml();
				}
			}
		}
		
		return $text;
	}
	
}
	
?>