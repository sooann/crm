
<?php
	
/**
 *
 * 
 *
 * @name	formelement
 * @type	CLASS
 *
*/
		
class formelement extends element {
var $json="";
var $pattern = "";

	public function getHTML() {
		if ($this->json=="") {
					$this->json = '{"data" : [ { "data": "Form Elements", "attr": { "class": "" }, "state": "open", "metadata": {}, "children": [] } ] }';
				}
		
		return '
			{% autoescape false %}
				{{ calldecl ("jquery.js") }}
				{{ calldecl ("jquery.cookie.js") }}
				{{ calldecl ("jquery.hotkeys.js") }}
				{{ calldecl ("jquery.jstree.js") }}
				{{ calldecl ("!style.css") }}
			{% endautoescape %}
						
		<div id="'.$this->name.'_tree" class="demo" style="height:200px;width:500px"></div>
		<input type="hidden" name="' . $this->name . '" id="' . $this->_getHTMLId() . '" value="' . htmlspecialchars( $this->json ) . '" />
		<script type="text/javascript">
			var treedata = '.$this->json.';
			$(function () {
			// TO CREATE AN INSTANCE
			// select the tree container using jQuery
			$("#'.$this->name.'_tree")
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
						"pattern" : [ '.$this->getFormElementParameters().' ]
					}
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
			//echo str_replace("\n","<br />",var_export($prop,TRUE));
			$arrtext="";
			if (is_array($prop)) {
				$ele = $prop[0];
			} else if (property_exists($prop->data[0],"children")) {
				$ele = $prop->data[0];
			}
			
			if (property_exists($ele, "children")) {
				foreach ($ele->children as $e) {
					$arrtext .= '"'.$e->data.'"=> array(';
					foreach ($e->children as $ep) {
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
					if (substr($arrtext,strlen($arrtext)-1,1)==",") {
						$arrtext = substr($arrtext, 0, -1);
					}
					$arrtext .= "),";
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
		
		$this->json = '{"data" : [ { "data": "Form Elements", "attr": { "class": "" }, "state": "open", "metadata": {}, "children": [';
		
		eval ("\$array = array(" . $value .");");

		foreach ($array as $elekey => $elementarray) {
			$this->json .= '{ "data": "'.$elekey.'", "children": [';
			foreach ($elementarray as $key => $value) {
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
			$this->json .= "]},";
		}
		if (substr($this->json,strlen($this->json)-1,1)==",") {
			$this->json = substr($this->json,0,-1);
		}
		$this->json .= '] } ] }';
		
		return true;
	}
	
	private function getFormElementParameters () {
		
		$text = "";
		$defaultparm = '"displayname","value","html","help","rowlayout","prefix","postfix","readonly","display","htmlid"';
		
		/*
		$formelements = SysFrmelementQuery::create()
			->filterByActive(1)
			->find();
		*/
		
		$con = Propel::getConnection();
		$stmt = $con->query("select * from sys_FrmElement where blnActive=1");
		while ($row = $stmt->fetch()) {
			$text .= "{ ";
			$text .= '"name": "'.$row["strClassName"].'",';
			
			$paramtext="";
			if ($row["strParameters"]!="") {
				$arr = explode(",", $row["strParameters"]);
				foreach ($arr as $v) {
					$paramtext .= '"'.$v.'",';
				}
			}
			
			$arrtext="";
			if ($row["strParamArray"]!="") {
				$arr = explode(",", $row["strParamArray"]);
				foreach ($arr as $v) {
					$arrtext .= '"'.$v.'",';
				}
			}
			
			//include parameters for extend
			$extends = $row["strExtends"];
			while ($extends!="") {
				$stmt2 = $con->query("select * from sys_FrmElement where strClassName like '".$extends."' and blnActive=1");
				$extends="";
				while ($row2 = $stmt2->fetch()) {
					if ($row2["strParameters"]!="") {
						$arr = explode(",", $row2["strParameters"]);
						foreach ($arr as $v) {
							$paramtext .= '"'.$v.'",';
						}
					}

					if ($row2["strParamArray"]!="") {
						$arr = explode(",", $row2["strParamArray"]);
						foreach ($arr as $v) {
							$arrtext .= '"'.$v.'",';
						}
					}
					$extends = $row2["strExtends"];
				}
				
			}
			
			$text .= '"parameters": ['.implode(",",array_unique(explode(",",$paramtext.$defaultparm))).']';
			
			if ($arrtext!="") {
				if (substr($arrtext, strlen($arrtext)-1, 1)==",") {
					$arrtext = substr($arrtext, 0, -1);
				}
				$text .= ', "paramarray": ['.implode(",",array_unique(explode(",",$arrtext))).']';
			}
			$text .= "},";
		}

		if (substr($text, strlen($text)-1, 1)==",") {
			$text = substr($text, 0, -1);
		}
		
		return $text;
	}}

?>
		