
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
		
		parent::__construct($key, $configvalues);
		
		//configure onelevel plugins
		$this->replacePlugins("crrm", "onelevelcrrm");
		
	}


}

?>
		