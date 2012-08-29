<?php
	
function __autoload($classname) {
    //echo "autoload $classname <br />";
	$dir = realpath(dirname(__FILE__)."/..");
	//echo $dir;
	$classpath = "";
	if ($handle = opendir($dir)) {
	    while (false !== ($entry = readdir($handle))) {
	        if ($entry != "." && $entry != "..") {
				if (is_dir($dir."/".$entry)) {
					if (strrpos(strtoupper($classname),strtoupper($entry))!==false) {
						$classpath=$dir."/".$entry."/";
					}
				}
	        }
	    }
	    closedir($handle);
	}
	if ($classpath=="") {
		if (file_exists($dir."/".$classname.".php")) {
			$classpath = $dir."/";
		} else {
			//echo "cannot find include file.\n";
			return;
		}
	}
		
	//for debug
	//echo $classpath.$classname.".php"."\n";
    require_once ($classpath.$classname.".php");
	
	//route to propel autoloader also
}
	
?>