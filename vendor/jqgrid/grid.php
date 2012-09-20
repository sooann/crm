<?php

require_once 'jq-config.php';
// include the jqGrid Class
require_once ABSPATH."php/jqGrid.php";
// include the driver class
require_once ABSPATH."php/jqGridPdo.php";

$grid = "#grid";

// Connection to the server
$conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
// Tell the db that we use utf-8
$conn->query("SET NAMES utf8");
// Create the jqGrid instance
$grid = new jqGridRender($conn);
// Write the SQL Query
$grid->SelectCommand = 'select * from sec_webpagetracking';
// Set output format to json
$grid->dataType = 'json';
// Let the grid create the model
$grid->setColModel();
// Set the url from where we obtain the data
$grid->setUrl('grid.php?qid=12');
// Set some grid options
$grid->setGridOptions(array(
    "rowNum"=>20,
    "rowList"=>array(10,20,30,50,100),
    "sortname"=>"webpagetracking_id",
	"width" => "1000",
	"height" => "100%",
	"toppager" => true,
	"hoverrows" => true,
	"multiselect" => true,
	
));

$grid->setColProperty("dtCreatedDate", array("hidden" => true, "hidedlg"=>false));
$grid->setColProperty("intCreatedBy", array("hidden" => true, "hidedlg"=>false));
$grid->setColProperty("strSessionID", array("hidden" => true, "hidedlg"=>false));
$grid->setColProperty("webpagetracking_id", array("width"=>30));

// Enable navigator
$grid->navigator = true;
// Enable search
// By default we have multiple search enabled
$grid->setNavOptions('navigator', array("cloneToTop"=>true, "excel"=>false,"add"=>false,"edit"=>false,"del"=>false,"view"=>true));

$grid->addCol(array( "name"=>"actions", "formatter"=>"js:jqgridaction", "formatoptions" => array("baseLinkUrl"=>"/crm/sys/webpagetracking/", "showAction"=>"edit", "useSlashes"=>true ), "width"=>60, "search"=>false), "first");

$jqgridaction = <<< CUSTOM

function jqgridaction(cellValue, options, rowObject) {
	//getting formatoptions
	var op ={editbutton:true, checkbox:true, baseLinkUrl:"" , editcustomfunc:"_returntrue", checkboxcustomfunc:"_returntrue" };
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
					message: "<p>Update Successful</p><p><input type='button' value='Click here to continue' onclick='$(\"#grid\").parent().parent().parent().parent().unblock();$('#grid').trigger("reloadGrid");' /></p>", 
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

$extScript = <<< CUSTOM
<script type="text/javascript">
	function checkSelectAllState() {
		var arr = $("#grid").jqGrid('getDataIDs'), allSelected=true;
		for (var i=0; i<arr.length; i++) {
			if (!$('#grid tr#'+arr[i]+' .ui-inline-checkbox input').is(':checked')) { 
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
</script>
CUSTOM;

// mass action buttons
$grid->callGridMethod("#grid", "navButtonAdd", array("#pager", array("caption"=>"Enable/Disable", "title"=>"Enable/Diable Selected Records", "buttonicon"=>"ui-icon-power", "onClickButton"=>"js: function(e) { massaction('sys/webtracking','disable',this,e); }")));
$grid->callGridMethod("#grid", "navButtonAdd", array("#grid_toppager", array("caption"=>"Enable/Disable", "title"=>"Enable/Diable Selected Records", "buttonicon"=>"ui-icon-power", "onClickButton"=>"js: function(e) { massaction('sys/webtracking','disable',this,e); }")));

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
$grid->renderGrid("#grid",'#pager',true, null, null, true,true);
$conn = null;

if ($_SERVER["QUERY_STRING"]=="") {
	echo $extScript;
}
?>
