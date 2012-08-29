<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>jsTree v.1.0 - Demo</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="js/jquery.jstree.js"></script>
	<link type="text/css" rel="stylesheet" href="css/!style.css"/>
</head>
<body id="demo_body">
<div id="container">
<h1 id="dhead">jsTree v.1.0</h1>
<h1>DEMO</h1>
<h2>Creating a tree, binding events, using the instance</h2>
<div id="description">
<p>Here is how you create an instance, bind an event and then get the instance.</p>
<div id="demo1" class="demo" style="height:100px;"></div>
<div id="display" class="demo" ></div>
<script type="text/javascript" class="source below">
var treedata = {
				"data" : [
					{ 
						"data" : "Form Elements"
					}
				]
			};
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
						"parameters" : ["type","displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name" : "inputPassword",
						"parameters" : ["type","displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name": "inputHidden",
						"parameters" : ["type","displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					},
					{
						"name": "textarea",
						"parameters" : ["type","displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"]
					}
				]
			},
			// it makes sense to configure a plugin only if overriding the defaults
		})
		.bind("loaded.jstree", function (event, data) {
			displayJSON(this);
		})
		.bind("create.jstree", function (event, data) {
			displayJSON(this);
		})
		.bind("rename.jstree", function (event, data) {
			displayJSON(this);
		})
		.bind("move_node.jstree", function (event, data) {
			displayJSON(this);
		})
		.bind("remove.jstree", function (event, data) {
			displayJSON(this);
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

</body></html>