<?php

require_once 'vendor/jqgrid/jq-config.php';

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
			//$grid = new jqGridRender($conn);
			$grid = new JQGridFactory($conn);
			
			// Write the SQL Query
			$grid->SelectCommand = $webpage->getSysSqlquery()->getStatement();
			// Set output format to json
			$grid->dataType = 'json';
			// Let the grid create the model
			$grid->setColModel();
			// Set the url from where we obtain the data
			$grid->setUrl('/crm/data/id/'.$webpage->getSqlqueryId());
			
			//predefault setting array 
			$gridoptionsarr = array(
				"width" => "940",
				"height" => "100%",
				"toppager" => true,
				"hoverrows" => true,
				"multiselect" => true,
				//"shrinkToFit" => false,
				"pagerpos"=>"right");
			
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
			// TODO: default to hide all columns from display and dialog
			foreach($grid->getColModel() as $row) {
				$grid->setColProperty($row["name"],array("hidedlg"=>true,"hidden"=>true));
			}
			$colopts = $webpage->getSysWebpagecolumns();
			$gridcolopts = array();
			foreach ($colopts as $colopt) {
				$optarr = array();
				if ($colopt->getDisplay()=="Yes") {
					$optarr["hidedlg"] = false;
					if ($colopt->getHidden()=="Yes") {
						$optarr["hidden"] = true;
					} else {
						$optarr["hidden"] =false;
					}
					
				} else {
					$optarr["hidden"] = true;
					$optarr["hidedlg"] = true;
				}
				if ($colopt->getSearch()=="Yes") {
					$optarr["searh"] = true;
				} else {
					$optarr["searh"] = false;
				}
				if ($colopt->getFormatter()!="") {
					$optarr["formatter"]="js:".$colopt->getFormatter();
				}
				$optarr["label"] = $colopt->getName();
				
				$grid->setColProperty($colopt->getQuerycolumn(),$optarr);
				
				//get column property and insert into temporary array
				foreach($grid->getColModel() as $copt) {
					if ($copt["name"]==$colopt->getQuerycolumn()) {
						$gridcolopts[]=$copt;
					}
				}
			}
			$grid->setColModel($gridcolopts);
			
			// Enable navigator
			$grid->navigator = true;
			// Enable search
			// By default we have multiple search enabled
			$grid->setNavOptions('navigator', array("cloneToTop"=>true, "excel"=>false,"add"=>false,"edit"=>false,"del"=>false,"view"=>true));
			
			// In order to enable the more complex search we should set multipleGroup option
			$grid->setNavOptions('search', array("multipleGroup"=>true));
			
			$jqgridaction = <<< CUSTOM

			function jqgridaction(cellValue, options, rowObject) {
				//getting formatoptions
				var op ={editbutton:false, checkbox:false, baseLinkUrl:"" , editcustomfunc:"_returntrue", checkboxcustomfunc:"_returntrue" };
				if(!$.fmatter.isUndefined(options.colModel.formatoptions)) {
					op = $.extend(op,options.colModel.formatoptions);
				}

				var str="",url="";

				styleedit = "float:left;cursor:pointer;width:21px;padding-left:3px";
				stylecheckbox = "float:left;cursor:pointer;width:21px;padding-left:3px";

				if (op.editbutton && op.baseLinkUrl!="") {
					ocl = "onmouseover=jQuery(this).addClass('ui-state-custom-hover'); onmouseout=jQuery(this).removeClass('ui-state-custom-hover') ";
					if (eval(op.editcustomfunc+"(cellValue,options,rowObject)") ) {
						url = $.fn.fmatter.showlink("<span class='ui-icon ui-icon-pencil'></span>", options);
					} else {
						url = "&nbsp;";
					}
					str += "<div title='"+$.jgrid.nav.edittitle+"' style='"+styleedit+"' class='ui-pg-div ui-inline-edit' "+ocl+">"+url+"</div>";
				}

				if (op.checkbox ) {
					ocl = "onclick=jQuery('#grid').jqGrid('setSelection','"+options.rowId+"',true);checkSelectAllState();";
					str += "<div title='"+$.jgrid.nav.edittitle+"' style='"+stylecheckbox+"' class='ui-pg-div ui-inline-checkbox' >";
					if (eval(op.checkboxcustomfunc+"(cellValue,options,rowObject)")) {
						str += "<input type='checkbox' "+ocl+" /></span>";
					}
					str += "</div>";
				}

				return str;
			}

			function unjqgridaction(cellValue, options, cellObject) {
				return $(cellObject.html()).attr("originalValue");
			}

			function toggleSelect(e) {
				var linkbutton;
				if (e.currentTarget.id.indexOf("-top")!=-1) {
					linkbutton="#"+e.currentTarget.id.replace("-top","");
				} else {
					linkbutton="#"+e.currentTarget.id+"-top";
				}
				if ($(e.currentTarget).hasClass('ui-state-pg-highlight')) {
					$(e.currentTarget).removeClass('ui-state-pg-highlight');
					$(linkbutton).removeClass('ui-state-pg-highlight');
				} else {
					$(e.currentTarget).addClass('ui-state-pg-highlight');
					$(linkbutton).addClass('ui-state-pg-highlight');
				}
				if ($(e.currentTarget).hasClass('ui-state-pg-highlight')) {
					// select all rows
					$.each ($(this).jqGrid('getDataIDs'), function (index,value) {
						if (!$('#grid tr#'+value+' .ui-inline-checkbox input').is(':checked')) { 
							$("#grid").jqGrid("setSelection", value, true);
							$('#grid tr#'+value+' .ui-inline-checkbox input').attr("checked",true);
						}

					});
				} else {
					// de-select all rows
					$.each ($(this).jqGrid('getDataIDs'), function (index,value) {
						$("#grid").jqGrid("setSelection", value, false);
						$('#grid tr#'+value+' .ui-inline-checkbox input').attr("checked",false);
					});
				}

			}

			function massaction(module,action,ts,e) {
				//get selected rows
				var selr = jQuery('#grid').jqGrid('getGridParam','selarrrow');
				if(selr!="") {
					// using ajax method
					// show submitting dialogbox and lock jqgrid.
					$("#grid").parent().parent().parent().parent().block({message: "Submiting information to Server... Please wait...", css: { paddingTop:'10px', paddingBottom:'10px', fontWeight:'bold'}});
					// post data via ajax url
					$.ajax({
						type:"POST",
						url: "/crm/"+module+"/"+action+"/"+selr,
						data: "",
						success: function() {
							$("#grid").parent().parent().parent().parent().block({
								message: "<p>Update Successful</p><p><input type='button' value='Click here to continue' onclick='$(\"#grid\").parent().parent().parent().parent().unblock();$(\"#grid\").trigger(\"reloadGrid\");' /></p>", 
								css: { 
									fontWeight:'bold', 
									backgroundColor: '#0f0', 
									color: '#fff'
								}
							});
						},
						error: function() {
							$("#grid").parent().parent().parent().parent().block({
								message: "<p>Error Connecting to Server... Please try again later</p><p><input type='button' value='Click here to continue' onclick='$(\"#grid\").parent().parent().parent().parent().unblock();' /></p>", 
								css: { 
									fontWeight:'bold', 
									backgroundColor: '#f00', 
									color: '#fff'
								}
							});
						}
					});
				} else {
					$.jgrid.viewModal("#alertmod",{gbox:"#gbox_"+ts.p.id,jqm:true});
				}

			}

			function _returntrue() { return true; }

CUSTOM;

			$grid->setJSCode($jqgridaction);

			$extScript = '
				function checkSelectAllState() {
					var arr = $("#grid").jqGrid(\'getDataIDs\'), allSelected=true;
					for (var i=0; i<arr.length; i++) {
						if (!$(\'#grid tr#\'+arr[i]+\' .ui-inline-checkbox input\').is(\':checked\')) { 
							allSelected=false;
						}
					}
					if (!allSelected && $("#toggleselect").hasClass("ui-state-pg-highlight")) {
						$("#toggleselect").removeClass("ui-state-pg-highlight");
						$("#toggleselect-top").removeClass("ui-state-pg-highlight");
					} else if (allSelected && !$("#toggleselect").hasClass("ui-state-pg-highlight")) {
						$("#toggleselect").addClass("ui-state-pg-highlight");
						$("#toggleselect-top").addClass("ui-state-pg-highlight");
					}
				}
				
				function htmlformatter(cellValue, options, rowObject) {
				
					var entityMap = {
						"&": "&amp;",
						"<": "&lt;",
						">": "&gt;",
						\'"\': "&quot;",
						"\'": "&#39;",
						"/": "&#x2F;"
					};

					return String(cellValue).replace(/[&<>"\'\/]/g, function (s) {
					  return entityMap[s];
					});
				}

			';
			$extScript .= $webpage->getCommonjs();
			$extScript = '<script type="text/javascript">'.$extScript.'</script>';
			
			//set action column and mass update support
			$actionoptarray = array();
			$actionoptarray["useSlashes"] = true; 
			
			// setting edit options
			if ($webpage->getEditbaselinkurl()!="") {
				$actionoptarray["baseLinkUrl"] = $webpage->getEditbaselinkurl();
				$actionoptarray["showAction"] = $webpage->getEditactionname();
				$actionoptarray["editbutton"] = true;
			}
			
			if ($webpage->getMassupdateenable()) {
				$actionoptarray["checkbox"] = true;
			}
			
			// setting checkbox options
			$grid->addCol(array( "name"=>"actions", "formatter"=>"js:jqgridaction", "formatoptions" => $actionoptarray, "width"=>60, "search"=>false, "hidedlg"=>true, "viewable"=>false), "first");
				
			//add mass action buttons
			$temparr = array();
			eval("\$temparr = array(".$webpage->getMassupdateoptions().");");
			$massactionopt = array();
			foreach ($temparr as $v) {
				$massactionopt["caption"] = $v["caption"];
				$massactionopt["title"] = $v["title"];
				$massactionopt["buttonicon"] = $v["buttonicon"];
				switch ($v["functiontype"]) {
					case "massaction":
						if (array_key_exists("module", $v)) {
							$tempurl = $v["module"];
						} else {
							$tempurl = $webpage->getLocation();
						}
						$massactionopt["onClickButton"]="js: function(e) { massaction('".$tempurl."','".$v["action"]."',this,e);}";
						break;
					case "redirect":
						if (array_key_exists("action", $v)) {
							$tempurl = "/crm/".$webpage->getLocation()."/".$v["action"];
						} else if (array_key_exists("url", $v)) {
							$tempurl = "/crm/".$v["url"];
						} else if (array_key_exists("module", $v)) {
							$tempurl = "/crm/".$v["module"]."/".$v["action"];
						}
						$massactionopt["onClickButton"]="js: function(e) { window.location = '".$tempurl."'; }";
						break;
				}

				// mass action buttons
				$grid->callGridMethod("#grid", "navButtonAdd", array("#pager", $massactionopt));
				$grid->callGridMethod("#grid", "navButtonAdd", array("#grid_toppager", $massactionopt));
			}
			
			// add toggle select all
			$grid->callGridMethod("#grid", "navButtonAdd", array("#pager", array("caption"=>"Check all", "title"=>"Select/Deselect All", "buttonicon"=>"ui-icon-check", "onClickButton"=>"js: toggleSelect", "id"=>"toggleselect")));
			$grid->callGridMethod("#grid", "navButtonAdd", array("#grid_toppager", array("caption"=>"Check all", "title"=>"Select/Deselect All", "buttonicon"=>"ui-icon-check", "onClickButton"=>"js: toggleSelect", "id"=>"toggleselect-top")));

			// add hide/show columns
			$grid->callGridMethod("#grid", "navButtonAdd", array("#pager", array("caption"=>"columns", "title"=>"Hide/Show Columns", "buttonicon"=>"ui-icon-note", "onClickButton"=>"js: function(){ jQuery('#grid').jqGrid('setColumns');}", "id"=>"hideshow"))); 
			$grid->callGridMethod("#grid", "navButtonAdd", array("#grid_toppager", array("caption"=>"columns", "title"=>"Hide/Show Columns", "buttonicon"=>"ui-icon-note", "onClickButton"=>"js: function(){ jQuery('#grid').jqGrid('setColumns');}", "id"=>"hideshow-top"))); 

			$grid->callGridMethod("#grid", "hideCol", array("cb"));

			// In order to enable the more complex search we should set multipleGroup option
			$grid->setNavOptions('search', array("multipleGroup"=>true));

			// Enjoy
			$html=$webpage->getHtml().$grid->buildHtml("#grid",'#pager',true, null, null, true,true).$extScript;

			parent::run($id,$controller,$html);
			return true;
			
		} else {
			return false;
		}
	}
	
}
	
?>