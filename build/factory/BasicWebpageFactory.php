<?php
	
class BasicWebpageFactory extends BaseFactory {
	
	private $html = "";
	
	public function getHtml() {
		return $this->html;
	}
	
	public function setHtml($v) {
		$this->html = $v;
	}
	
	public function __construct($webpage=null, $html=null) {
		
		if ($html==null) {
			$html=$webpage->getHtml();
		}
		
		$this->setHtml(self::buildwebsite($webpage,$html));
		
		$this->setHtml(TwigFactory::run($webpage,$this->getHtml()));

	}
			
	public static function run($id, $controller, $html=null) {
		$query = new SysWebpageQuery();
		if ($webpage = $query->findPK($id)) {
			
			$obj = new BasicWebpageFactory ($webpage, $html);
			self::writeHtml($obj->getHtml());
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