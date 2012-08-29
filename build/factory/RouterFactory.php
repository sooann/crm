<?php

require "vendor/slim/Slim.php";
	
class RouterFactory extends BaseFactory {
	
	private $router;
	
	public function __construct() {
		$this->router = new Slim();
		//load map from database
		$this->getRoute();
	}
	
	public function getRouter() {
		return $this->router;
	}
		
	public function run() {
		$r = $this->getRouter();
		$this->getRouter()->run();
	}
		
	private function getRoute() {
		$r = $this->getRouter();
		$con = Propel::getConnection();
		$stmt = $con->query("select * from SYS_URLRouter where blnactive=1 order by intOrder");
		while ($row = $stmt->fetch()) {
			
			$strEval="";
			//build main function call
			$strEval .= "\$this->router->map('".$row["strPattern"]."', 
				function (".$this->getRouteParameters($row["strPattern"]).") use (\$r) {";
			
			if ($row["strCallable"]!="") {
				$strEval .= $row["strCallable"];
			} else if ($row["strControllerClass"]!="") {
				//call user fuction arary to new controller class
				$strEval .= "
					RouterFactory::executeController('".$row["strControllerClass"]."',\$r);
				";
			}
				
			$strEval .= "})";
			
			if ($row["strName"]!="") {
				$strEval .= "->name('".$row["strName"]."')";
			}
			
			//Build Via conditions
			$strVia="";
			if ($row["blnGet"]==1) {
				$strVia .="'GET', 'HEAD'";
			}
			if ($strVia!="") {
				$strVia .=" ,";
			}
			if ($row["blnPost"]==1) {
				$strVia .="'POST'";
			}
			if ($strVia!="") {
				$strEval .= "->via(".$strVia.")";
			}
			
			//build filter conditions
			if ($row["strConditions"]!="") {
				$strEval .= "->conditions(array(".$row['strConditions']."))";
			}
			
			$strEval .=";";
			
			//run complied function
			//echo htmlentities($strEval);
			eval($strEval);
			
		}
	}
	
	private function getRouteParameters($str) {
        $patternAsRegex = preg_match_all('#:([\w]+)\+?#', $str, $arr);
		$ret="";
		foreach ($arr[1] as $value) {
			$ret .= "$".$value."=null,";
		}
		return substr($ret,0,strlen($ret)-1);
	}	
	
	public static function executeController($class="CMSController", $router) {
		
		$params = array();
		$params['router'] = $router; 
		$params['parameters'] = self::getRouteValues($router);
		$params['class']=$class;
		
		call_user_func_array('ControllerFactory::run',$params);
		
	} 
	
	private static function getRouteValues($router) {
		return $router->router()->getCurrentRoute()->getParams();
		
	}

}
	
?>