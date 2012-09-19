
<?php
	include_once( realpath(__DIR__) . '/' . 'element.jstree.php');
/**
 *
 * 
 *
 * @name	formelement
 * @type	CLASS
 *
*/
		
class formelement extends jstree {
var $json="";
var $pattern = "";
var $roottext = "Form Elements";

	function __construct($key, $configvalues) {
		//set plugins
				parent::__construct($key, $configvalues);
						
				//configure onelevel plugins
				$this->replacePlugins("crrm", "clonefishcrrm");
	}


protected function getPattern() {
		
		$text = "";
		$defaultparm = '"displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"';
		
		/*
		$formelements = SysFrmelementQuery::create()
			->filterByActive(1)
			->find();
		*/
		
		$con = Propel::getConnection();
		$stmt = $con->query("select * from sys_FrmElement where blnActive=1");
		while ($row = $stmt->fetch()) {
			$text .= "{ ";
			$text .= '"name": "'.$row["strClassName"].'",';
			
			$paramtext="";
			if ($row["strParameters"]!="") {
				$arr = explode(",", $row["strParameters"]);
				foreach ($arr as $v) {
					$paramtext .= '"'.$v.'",';
				}
			}
			
			$arrtext="";
			if ($row["strParamArray"]!="") {
				$arr = explode(",", $row["strParamArray"]);
				foreach ($arr as $v) {
					$arrtext .= '"'.$v.'",';
				}
			}
			
			//include parameters for extend
			$extends = $row["strExtends"];
			while ($extends!="") {
				$stmt2 = $con->query("select * from sys_FrmElement where strClassName like '".$extends."' and blnActive=1");
				$extends="";
				while ($row2 = $stmt2->fetch()) {
					if ($row2["strParameters"]!="") {
						$arr = explode(",", $row2["strParameters"]);
						foreach ($arr as $v) {
							$paramtext .= '"'.$v.'",';
						}
					}

					if ($row2["strParamArray"]!="") {
						$arr = explode(",", $row2["strParamArray"]);
						foreach ($arr as $v) {
							$arrtext .= '"'.$v.'",';
						}
					}
					$extends = $row2["strExtends"];
				}
				
			}
			
			$text .= '"parameters": ['.implode(",",array_unique(explode(",",$paramtext.$defaultparm))).']';
			
			if ($arrtext!="") {
				if (substr($arrtext, strlen($arrtext)-1, 1)==",") {
					$arrtext = substr($arrtext, 0, -1);
				}
				$text .= ', "paramarray": ['.implode(",",array_unique(explode(",",$arrtext))).']';
			}
			$text .= "},";
		}

		if (substr($text, strlen($text)-1, 1)==",") {
			$text = substr($text, 0, -1);
		}
		return $text;
	}}

?>
		