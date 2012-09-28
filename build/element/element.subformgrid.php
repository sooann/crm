
<?php
	require_once 'vendor/jqgrid/jq-config.php';
/**
 *
 * 
 *
 * @name	subformgrid
 * @type	CLASS
 *
*/
		
class subformgrid extends element {
//varibles updated by clonefish
	var $height= "100%";
	var $width = "500";
	
	//local default variables
	var $dataType = 'local';
	var $sql = "";
	var $data = array();
	var $html = "";
	var $columns = "";
	var $model = array();
	var $arrdata;

	public function getHTML() {
		// Connection to the server
				$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
				// Tell the db that we use utf-8
				$conn->query("SET NAMES utf8");
				// Create the jqGrid instance
				$grid = new JQGridFactory($conn);
		
				$grid->setHtmlId($this->_getHTMLId());
		
				// Set output format to json
				$grid->dataType = $this->dataType;
		
				//predefault setting array 
				$gridoptionsarr = array(
					"width" => $this->width,
					"height" => $this->height,
					"editurl" => "clientArray",
					"hoverrows" => true);
				$grid->setGridOptions($gridoptionsarr);
		
				//get model from database
				$this->getModel();
				$grid->setColModel($this->model);
		
				$grid->setUrl('clientArray');
		
				// Let put it using the callGridMethod
				$grid->callGridMethod("#".$grid->getGridId(), 'addRowData', array("Querycolumn",$this->value));
		
				$grid->setGridEvent('onSelectRow',$grid->getOnSelectRow());
		
				$posthtml='
					<input type="hidden" name="'.$this->_getHTMLId().'" id="'.$this->_getHTMLId().'" value="'.htmlspecialchars($this->arrdata).'" />
					<script type="text/javascript" >var lastSelection;</script>
				';
				// Enjoy
				$this->html = $grid->buildHtml("#".$grid->getGridId(),null,true, null, null, true,true).$posthtml;
				$conn = null;
		
				return ($this->html);
	}

public function getModel() {
		
		//translating model from database to array
		foreach ($this->columns as $key => $value) {
			$arr = array();
			$arr["name"] = $key;
			foreach ($value as $k => $v) {
				$arr[$k] = $v;
			}
			array_push($this->model,$arr);
		}
		
	}}

?>
		