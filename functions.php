<?php

function array_to_string ($arr, $addquote) {
	$text="";
	$temparr = explode(",", $arr);
	foreach ($temparr as $value) {
		if ($value!="") {
			if ($addquote) {
				$text .= '"$value",'; 
			} else {
				$text .= '$value,'; 
			}
		}
	}
	if (substr($text, strlen($text)-1, 1)==",") {
		$text = substr($text, 0, -1);
	}
	return $text;
	
}
?>
