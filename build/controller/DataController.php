<?php
	
class DataController extends BaseController {
	
	protected $sql = null; 
	protected $format = 'json';
	protected $type = 'data';
	protected $data = "";
	
	public function DataController($router, $params) {
		$this->setRouter($router);
		$this->setParams($params);
		
		if ($params["source"]=="sql") {
			$this->sql = $params["id"];
		} else {
			$this->sql = $this->getSQLStatment($params["id"]);
		}
		
		if (array_key_exists("format",$_REQUEST)) {
			$this->format = $_REQUEST["format"];
		}
		
		if (array_key_exists("type",$_REQUEST)) {
			$this->type = $_REQUEST["type"];
		}
		
		if ($this->sql!=null) {
			
			//get data in form of json
			switch ($this->type) {
				case "meta":
					$this->getQueryMetaData();
					break;
				case "data":
					//$this->getQueryData();
					$this->getPropelData();
					break;
				default:
					$this->getQueryData();
					break;
			}
			
			if ($this->type!="data") {
				//convert data into output format
				switch ($this->format) {
					case "json":
						$parser = PropelParser::getParser("JSON");
						$this->data = $parser->fromArray($this->data);
						break;
					case "xml":
						$parser = PropelParser::getParser("XML");
						$this->data = $parser->fromArray($this->data);
						break;
				}

				echo $this->data;
			}
			//exit();
			
		} else {
			$router->notFound();
		}
		
		/*
		if (!$this->match()) {
			$router->notFound();
			//throw new NotFoundException("Webpage not found");
		}
		 */
	}
	
	protected function getPropelData() {
		require_once 'vendor/jqgrid/jq-config.php';
		// include the jqGrid Class
		require_once ABSPATH."php/jqGrid.php";
		// include the driver class
		require_once ABSPATH."php/jqGridPdo.php";
		
		// Connection to the server
		$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
		// Tell the db that we use utf-8
		$conn->query("SET NAMES utf8");
		
		$grid = new jqGridRender($conn);
		// Write the SQL Query
		$grid->SelectCommand = $this->sql;
		// Set output format to json
		$grid->dataType = 'json';
		// Let the grid create the model
		$grid->setColModel();

		$grid->renderGrid("#grid",'#pager',true, null, null, true,true);
	}
	
	protected function getQueryMetaData() {
		$conn = Propel::getConnection();
		$stmt = $conn->query($this->sql);
		$arr = array();
		for ($i=0; $i<$stmt->columnCount(); $i++) {
			//reformat metadata based on webpagecolumn table
			$e = array();
			$cm = $stmt->getColumnMeta($i);
			$e["Querycolumn"] = $cm["name"];
			switch ($cm["native_type"]) {
				case "LONGLONG":
					$e["Datatype"] = "int";
					break;
				case "LONG":
					$e["Datatype"] = "int";
					break;
				case "VAR_STRING":
					$e["Datatype"] = "string";
					break;
				case "BLOB":
					$e["Datatype"] = "string";
					break;
				case "DATETIME":
					$e["Datatype"] = "date";
					break;
			}
			if (array_search("primary_key",$cm["flags"]) ) {
				$e["Prikey"] = "Yes";
			} else {
				$e["Prikey"] = "No";
			}
			array_push($arr, $e);
		}
		$this->data = $arr;
		//$this->data = json_encode($arr);
		return true;
	}
	
	protected function getQueryData() {
		$conn = Propel::getConnection();
		$this->data = $conn->query($this->sql)->fetchAll();
		//$this->data = json_encode($conn->query($this->sql)->fetchAll());
		return true;
	}
	
	protected function getSQLStatment($id=null) {
		if ($id!=null) {
			$query = SysSqlqueryQuery::create()->findPk($id);
			if ($query!=null) {
				return $query->getStatement();
			}
		}
	}
	
		
}
	
?>