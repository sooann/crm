
<?php
	require_once 'vendor/jqgrid/jq-config.php';
/**
 *
 * 
 *
 * @name	phpjqgrid
 * @type	CLASS
 *
*/
		
class phpjqgrid extends element {
var $height= "100%";
	var $width = "100%";
	var $dataType = 'local';
	var $sql = "";
	var $data = array();
	var $html = "";
	var $columns = "";
	var $model = array();

	public function getHTML() {
		// Connection to the server
				$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
				// Tell the db that we use utf-8
				$conn->query("SET NAMES utf8");
				// Create the jqGrid instance
				$grid = new JQGridFactory($conn);
		
				// Set output format to json
				$grid->dataType = $this->dataType;
				
				//manually creating model
				
				//predefault setting array 
				$gridoptionsarr = array(
					"width" => $this->width,
					"height" => $this->height,
					"hoverrows" => true);
				$grid->setGridOptions($gridoptionsarr);
				
				//get data from database
				
				// Enjoy
				$this->html = $grid->buildHtml("#grid",null,true, null, null, true,true);
				$conn = null;
				
				return ($this->html);
	}

public function getModel() {
		
		//translating model from database to array
		
		
		//return model array
		return array();
	}}

?>
		