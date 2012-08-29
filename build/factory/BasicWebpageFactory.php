<?php

require_once "vendor/twig/Autoloader.php";
	
class BasicWebpageFactory extends BaseFactory {
			
	public static function run($id, $controller, $html=null) {
		$query = new SysWebpageQuery();
		if ($webpage = $query->findPK($id)) {
			if ($html==null) {
				$html=$webpage->getHtml();
			}
			$document = self::buildwebsite($webpage,$html);
			
			//finalise html via template engine
			Twig_Autoloader::register();

			$loader = new Twig_Loader_String();
			$twig = new Twig_Environment($loader);
			$twig->addFilter('var_dump', new Twig_Filter_Function('var_dump'));
			$document = $twig->render($document,array("params"=>$webpage->toArray()));
			
			self::writeHtml($document);
			return true;
			
		} else {
			return false;
		}
	}
	
	private static function buildwebsite($webpage, $html) {
		if ($webpage->getWebtemplateid()!=null) {
			$document = self::runTemplate($webpage->getWebtemplateid(), $html);
		} else {
			if ($webpage->getName()!=null) {
				$head = "<head><title>".$webpage->getName()."</title></head>";
			}
			$document = "<html>".$head."<body>".$html."</body></html>";
		}
		return $document;
	}
	
	public static function runTemplate ($templateid, $html) {
		return WebtemplateFactory::run($templateid,$html);
	}
	
	public static function writeHtml($html) {
		echo $html;
	}
	
}
	
?>