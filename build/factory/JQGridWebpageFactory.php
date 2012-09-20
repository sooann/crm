<?php

include "vendor/clonefish/runtime/clonefish.php";
include "vendor/clonefish/runtime/messages_en.php";

class JQGridWebpageFactory extends BasicWebpageFactory {
			
	public static function run($id, $controller, $html=null) {
		$query = new SysWebpageQuery();
		if ($webpage = $query->findPK($id)) {
			
			$html = '
				<link rel="stylesheet" type="text/css" media="screen" href="themes/redmond/jquery-ui-custom.css" />
				<link rel="stylesheet" type="text/css" media="screen" href="themes/ui.jqgrid.css" />
				<link rel="stylesheet" type="text/css" media="screen" href="themes/ui.multiselect.css" />
				<script src="js/jquery.js" type="text/javascript"></script>
				<script src="js/i18n/grid.locale-en.js" type="text/javascript"></script>
				<script type="text/javascript">
				$.jgrid.no_legacy_api = true;
				$.jgrid.useJSON = true;
				</script>
				<script src="js/jquery.jqGrid.min.js" type="text/javascript"></script>
				<script src="js/jquery-ui-custom.min.js" type="text/javascript"></script>
				<script src="js/grid.setcolumns.js" type="text/javascript"></script>
				<script src="js/jquery.blockUI.js" type="text/javascript"></script>
			';
			
			require_once 'vendor/jqgrid/jq-config.php';
			// include the jqGrid Class
			require_once ABSPATH."php/jqGrid.php";
			// include the driver class
			require_once ABSPATH."php/jqGridPdo.php";
			
			// Connection to the server
			$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
			// Tell the db that we use utf-8
			$conn->query("SET NAMES utf8");
			// Create the jqGrid instance
			$grid = new jqGridRender($conn);
			
			// Write the SQL Query
			$grid->SelectCommand = $webpage->getSysSqlquery()->getStatement();
			// Set output format to json
			$grid->dataType = 'json';
			// Let the grid create the model
			$grid->setColModel();
			// Set the url from where we obtain the data
			$grid->setUrl('/crm/data?qid='.$webpage->getSqlqueryId());
			
			//predefault setting array 
			$gridoptionsarr = array(
				"width" => "1000",
				"height" => "100%",
				"toppager" => true,
				"hoverrows" => true,
				"multiselect" => true);
			
			//adding more options from database
			$dbarr=array();
			eval("\$dbarr = array(".$webpage->getGridoptions().");");
			
			//Conditioning variables
			foreach ($dbarr as $key => $value) {
				if (array_search($key, array("rowList"))!==FALSE) {
					// array
					eval ("\$dbarr['".$key."'] = array(".$value.");");
				} else {
					// all other variables
					eval ("\$dbarr['".$key."'] = ".$value.";");
				}
			}
			$gridoptionsarr = array_merge($gridoptionsarr, $dbarr);
			
			// set grid options
			$grid->setGridOptions($gridoptionsarr);
					
			//setting up columns
			
			
			$html=$webpage->getHtml();

			parent::run($id,$controller,$html);
			return true;
			
		} else {
			return false;
		}
	}
	
}
	
?>