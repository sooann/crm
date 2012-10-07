
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
	var $gridorder = false;
	
	//local default variables
	var $dataType = 'local';
	var $sql = "";
	var $data = array();
	var $html = "";
	var $columns = "";
	var $model = array();
	var $arrdata;

	public function getHTML() {
		
		$gridorderjs = "";
		
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

		// grid order by
		if ($this->gridorder) {
			$gridorderjs = '
				function gridorderformatter(cellValue, options, rowObject) {
					var css = "width:11px;float:left;cursor:pointer;padding-left:3px;"
					testing="testing";
					str = "<div title=\'Move Up\' style=\'"+css+"\' class=\'ui-pg-div ui-inline-moveup ui-icon ui-icon-arrowthick-1-n\' onclick=\'jqgrid_moveup(this)\'>&nbsp;</div>";
					str += "<div title=\'Move Down\' style=\'"+css+"\' class=\'ui-pg-div ui-inline-movedown ui-icon ui-icon-arrowthick-1-s\' onclick=\'jqgrid_movedown(this)\'>&nbsp;</div>";
					return str;
				}
				
				function jqgrid_moveup(e) {
					var srcrow = e.parentNode.parentNode.id;
					var ts = e.parentNode.parentNode.parentNode.parentNode;
					if (e.parentNode.parentNode.previousSibling.className.indexOf("jqgfirstrow")===-1) {
						$(ts).jqGrid(\'restoreRow\', lastSelection);
						var destrow = e.parentNode.parentNode.previousSibling.id;
						var temp = $(ts).jqGrid(\'getRowData\',srcrow);
						$(ts).jqGrid(\'delRowData\',srcrow);
						$(ts).jqGrid(\'addRowData\',srcrow,temp,"before",destrow);
					}
				}
				
				function jqgrid_movedown(e) {
					var srcrow = e.parentNode.parentNode.id;
					var ts = e.parentNode.parentNode.parentNode.parentNode;
					if (e.parentNode.parentNode.nextSibling!==null) {
						$(ts).jqGrid(\'restoreRow\', lastSelection);
						var destrow = e.parentNode.parentNode.nextSibling.id;
						var temp = $(ts).jqGrid(\'getRowData\',srcrow);
						$(ts).jqGrid(\'delRowData\',srcrow);
						$(ts).jqGrid(\'addRowData\',srcrow,temp,"after",destrow);
					}
					
				}
			';
			$grid->addCol(array( "name"=>"jqgridorder", "label"=>"Order", "formatter"=>"js:gridorderformatter", "search"=>false, "hidedlg"=>true, "width"=>40, "editable"=>false), "first");
		}

		$posthtml='
			<input type="hidden" name="'.$this->_getHTMLId().'" id="'.$this->_getHTMLId().'" value="'.htmlspecialchars($this->arrdata).'" />
			<script type="text/javascript" >var lastSelection;'.$gridorderjs.'</script>
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
		