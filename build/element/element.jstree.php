
<?php
	
/**
 *
 * 
 *
 * @name	jstree
 * @type	CLASS
 *
*/
		
class jstree extends element {
var $roottext = "";
	var $json="";
	var $pattern = "";
	var $plugins = array("themes","json_data","ui","crrm","cookies","dnd","search","types","hotkeys","contextmenu");

	function __construct($key, $configvalues) {
		parent::__construct($key, $configvalues);
				
				if ($this->roottext=="") {
					$this->roottext="Options"; 
				}
				
				$this->json= '{ "data" : [ { "data": "'.$this->roottext.'", "attr": { "class": "" }, "state": "open", "metadata": {}, "children": [] } ] }';
	}


	public function getHTML() {
		/*
				 *		temporary remove declaration for javascript
				 *		<script type="text/javascript" src="/crm/js/jquery.js"></script>
						<script type="text/javascript" src="/crm/js/jquery.cookie.js"></script>
						<script type="text/javascript" src="/crm/js/jquery.hotkeys.js"></script>
						<script type="text/javascript" src="/crm/js/jquery.jstree.js"></script>
						<link type="text/css" rel="stylesheet" href="/crm/css/!style.css"/>
						
				 * 
				 */
				
				return '
						<div id="'.$this->name.'_tree" class="demo" style="height:200px;width:500px"></div>
						<input type="hidden" name="' . $this->name . '" id="' . $this->_getHTMLId() . '" value="' . htmlspecialchars( $this->json ) . '" />
						<script type="text/javascript">
							var '.$this->_getHTMLId().'_treedata = '.$this->json.';
							$(function () {
							// TO CREATE AN INSTANCE
							// select the tree container using jQuery
							$("#'.$this->name.'_tree")
								// call `.jstree` with the options object
								.jstree({
									// the `plugins` array allows you to configure the active plugins on this instance
									"json_data" : '.$this->_getHTMLId().'_treedata,
									"themes" : {
										"theme" : "default",
										"dots" : true,
										"icons" : false
									},
									"plugins" : ['.$this->getPlugins().'],
									"pattern" : ['.$this->getPattern().']
									
									// it makes sense to configure a plugin only if overriding the defaults
								})
								.bind("loaded.jstree", function (event, data) {
									$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(this).get_json(-1), null, 4));
								})
								.bind("create.jstree", function (event, data) {
									$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(this).get_json(-1), null, 4));
								})
								.bind("rename.jstree", function (event, data) {
									$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(this).get_json(-1), null, 4));
								})
								.bind("move_node.jstree", function (event, data) {
									$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(this).get_json(-1), null, 4));
								})
								.bind("remove.jstree", function (event, data) {
									$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(this).get_json(-1), null, 4));
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
							$("#'.$this->_getHTMLId().'").val(JSON.stringify(jQuery.jstree._reference(obj).get_json(-1), null, 4));
						}
						</script>
								';
	}

	public function setValue($value, $magic_quotes_gpc) {
		$value = $this->_prepareInput( $value, $magic_quotes_gpc );
						
						if (count($_POST)==0) {
							$this->getJSON($value);
						} else {
							$this->getPHPArray($value);
						}
						
						return true;
	}

protected function getPHPArray ($value) {
		
		$this->value=array();
		if (json_decode($value)!==NULL) {
			$prop = json_decode($value);
			//echo str_replace("\n","<br />",var_export($prop[0],TRUE));
			$arrtext="";
			
			if (is_array($prop)) {
				$ele = $prop[0];
			} else if (property_exists($prop->data[0],"children")) {
				$ele = $prop->data[0];
			}
			
			if (property_exists($ele, "children")) {
				foreach ($ele->children as $e) {		
					if (is_array($e) || property_exists($e, "children")) {

						if (is_array($e)) {
							$arr = $e;
						} else if (property_exists($e, "children")) {
							$arr = $e->children;
						}

						$arrtext .= '"'.$e->data.'"=> array(';

						foreach ($arr as $ep) {
							if ($ep->data!="") {
								$exp = explode("=>", $ep->data);
								if ($exp[1]=="{array}") {
									$arrtext .= $exp[0] . "=>array(" ;
									if (property_exists($ep, "children")) {
										foreach ($ep->children as $epa) {
											$arrtext .= str_replace("[]","array()",$epa->data) . ",";
										}
									}
									if (substr($arrtext,strlen($arrtext)-1,1)==",") {
										$arrtext = substr($arrtext, 0, -1);
									}
									$arrtext .= ")," ;
								} else {
									$arrtext .= str_replace("[]","array()",$ep->data) . ",";
								}
							}

						}

					} else {
						$arrtext .= $e->data.",";
					}

					if (substr($arrtext,strlen($arrtext)-1,1)==",") {
						$arrtext = substr($arrtext, 0, -1);
					}

					if (is_array($e) || property_exists($e, "children")) {
						$arrtext .= "),";
					}

				}
			}
			if (substr($arrtext,strlen($arrtext)-1,1)==",") {
				$arrtext = substr($arrtext, 0, -1);
			}
			$this->value = $arrtext;
			return true;
		} else {
			$this->value="";
			return NULL;
		}
		
	}
	
	protected function getJSON ($value) {
		
		if ($this->roottext=="") {
			$this->roottext="Options"; 
		}
		$this->json = '{"data" : [ { "data": "'.$this->roottext.'", "attr": { "class": "" }, "state": "open", "metadata": {}, "children": [';
		
		eval ("\$array = array(" . $value .");");
		
		foreach ($array as $elekey => $element) {
			if (is_array($element)) {
				$this->json .= '{ "data": "'.$elekey.'", "children": [';
				foreach ($element as $key => $value) {
					if (is_array($value)) {
						$this->json .= '{ "data": "\"'.$key.'\"=>{array}", "children": [';
						foreach ($value as $arrkey => $arrval) {
							$this->json .= '{ "data": "\"'.$arrkey.'\"=>'.addcslashes(json_encode($arrval),'"').'" }';
						}
						$this->json .= '] },';
					} else {
						$this->json .= '{ "data": "\"'.$key.'\"=>'.addcslashes(json_encode($value),'"').'" },';
					}
				}
				
				if (substr($this->json,strlen($this->json)-1,1)==",") {
					$this->json = substr($this->json,0,-1);
				}
				
				$this->json .= "] },";
			} else {
				$this->json .= '{ "data": "\"'.$elekey.'\"=>\"'.$element.'\"" },';
			}
			
			if (substr($this->json,strlen($this->json)-1,1)==",") {
				$this->json = substr($this->json,0,-1);
			}
			
		}
		if (substr($this->json,strlen($this->json)-1,1)==",") {
			$this->json = substr($this->json,0,-1);
		}
		$this->json .= '] } ] }';
		
		return true;
	}
	
	protected function getPlugins() {
		return array_to_string($this->plugins, true);
	}
	
	public function replacePlugins ($search,$replace) {
		$this->plugins = array_replace_value($this->plugins, $search, $replace);
	}
	
	private function getPattern () {
		return array_to_string($this->pattern, true);
	}}

?>
		