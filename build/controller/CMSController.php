<?php
	
class CMSController extends BaseController {
	
	public function CMSController($router, $params) {
		$this->setRouter($router);
		$this->setParams($params);
		if (!$this->match()) {
			$router->notFound();
			//throw new NotFoundException("Webpage not found");
		}
	}
	
	protected function match() {
		
		$location = $this->params["dept"] . "/" . $this->params["module"];
		if (!array_key_exists('action',$this->params)) {
			$this->params["action"]="list";
		} else if ($this->params["action"]==null || $this->params["action"]=="") {
			$this->params["action"]="list";	
		}
		
		$sql = "select * from sys_webpage where blnActive=1 and strLocation='".$location."' and straction='".$this->params["action"]."'";
		$con = Propel::getConnection();
		if ($row = $con->query($sql)->fetch()) {
			if ($row["strRequiredParameters"]!="") {
				$arr = explode(",",$row["strRequiredParameters"]);
				foreach ($arr as $value) {
					if (!array_key_exists($value, $this->params)) {
						return false;
					}
				}
			}
			return $row["strWebpageFactory"]::run($row["webpage_id"], $this);
		} else {
			return false;
		}
		return true;
	}
		
}
	
?>