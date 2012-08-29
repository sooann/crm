
<?php
	include_once( realpath(__DIR__) . '/' . 'element.select.php');
/**
 *
 * 
 *
 * @name	selectWebpageFactory
 * @type	CLASS
 *
*/
		
class selectWebpageFactory extends select {
	function __construct($key, $configvalues) {
		$dir = realpath(dirname(__FILE__)."/../factory");
		
		$values = array();
		if ($handle = opendir($dir)) {
		    while (false !== ($entry = readdir($handle))) {
		        if ($entry != "." && $entry != "..") {
					if (is_file($dir."/".$entry)) {
						if (preg_match("#WebpageFactory.php$#",$entry)) {
							$values[str_replace(".php","",$entry)] = str_replace(".php","",$entry);
						}
					}
		        }
		    }
		    closedir($handle);
		}
		
		$configvalues["values"] = $values;
		
		parent::__construct($key, $configvalues);
	}


}

?>
		