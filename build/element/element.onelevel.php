
<?php
	include_once( realpath(__DIR__) . '/' . 'element.jstree.php');
/**
 *
 * 
 *
 * @name	onelevel
 * @type	CLASS
 *
*/
		
class onelevel extends jstree {
	function __construct($key, $configvalues) {
		//set plugins
		array_replace_value($this->plugins, "crrm", "onelevel");
				
		parent::__construct($key, $configvalues);
	}


}

?>
		