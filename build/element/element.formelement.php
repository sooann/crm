
<?php

/**
 *
 * 
 *
 * @name	selectWebpageFactory
 * @type	CLASS
 *
*/
		
class formelement extends element {
	
	
	public function getHTML() {
	
		$json = '{"data" : [ { "data": "Form Elements", "attr": { "class": "" }, "state": "open", "metadata": {}, "children": [';
		
		eval ("\$array = array(" . $this->value .");");

		foreach ($array as $elekey => $elementarray) {
			$json .= '{ "data": "'.$elekey.'", "children": [';
			foreach ($elementarray as $key => $value) {
				$json .= '{ "data": "\"'.$key.'\"=>'.addcslashes(json_encode($value),'"').'" },';
			}
			$json = substr($json,0,-1);
			$json .= "]},";
		}
		$json = substr($json,0,-1);
		$json .= '] } ] }';
			
		return '
<script type="text/javascript" src="/crm/js/jquery.js"></script>
<script type="text/javascript" src="/crm/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/crm/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="/crm/js/jquery.jstree.js"></script>
<link type="text/css" rel="stylesheet" href="/crm/css/!style.css"/>
<div id="demo1" class="demo" style="height:200px;width:500px"></div>
<script type="text/javascript">
	var treedata = '.$json.';
	$(function () {
	// TO CREATE AN INSTANCE
	// select the tree container using jQuery
	$("#demo1")
		// call `.jstree` with the options object
		.jstree({
			// the `plugins` array allows you to configure the active plugins on this instance
			"json_data" : treedata,
			"themes" : {
				"theme" : "default",
				"dots" : true,
				"icons" : false
			},
			"plugins" : ["themes","json_data","ui","clonefishcrrm","cookies","dnd","search","types","hotkeys","contextmenu"],
			"core" : {
				"useClonefish" : true
			},
			"clonefishcrrm" : {
				"pattern" : [ 
					{
						"name" : "inputType",
						"parameters" : ["displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name" : "inputPassword",
						"parameters" : ["displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name": "inputHidden",
						"parameters" : ["displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name": "textarea",
						"parameters" : ["displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name": "select",
						"parameters" : ["displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"],
						"paramarray" : ["values"]
					}
					
				]
			}
			// it makes sense to configure a plugin only if overriding the defaults
		})
		// EVENTS
		// each instance triggers its own events - to process those listen on the container
		// all events are in the `.jstree` namespace
		// so listen for `function_name`.`jstree` - you can function names from the docs
	// INSTANCES
	// 1) you can call most functions just by selecting the container and calling `.jstree("func",`
	setTimeout(function () { $("#demo1").jstree("set_focus"); }, 500);
	// with the methods below you can call even private functions (prefixed with `_`)
	// 2) you can get the focused instance using `$.jstree._focused()`. 
});

function displayJSON (obj) {
	$("#display").html(JSON.stringify(jQuery.jstree._reference(obj).get_json(-1), null, 4));
}
</script>
		';
		
	}
	
	public function setValue($value, $magic_quotes_gpc) {
	
		$value = $this->_prepareInput( $value, $magic_quotes_gpc );
		
		
		
	}

}

?>
		