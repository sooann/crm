<?php

function array_to_string ($arr, $addquote) {
	$text="";
	$temparr = array();
	
	if (!is_array($arr)) {
		if ($arr!="") {
			//removing trailing quotes
			$temparr = explode(",", str_replace('"', "", $arr));
		}
	} else {
		$temparr = $arr;
	}
	
	foreach ($temparr as $value) {
		if ($value!="") {
			if ($addquote) {
				$text .= '"'.$value.'",'; 
			} else {
				$text .= $value.','; 
			}
		}
	}
	if (substr($text, strlen($text)-1, 1)==",") {
		$text = substr($text, 0, -1);
	}
	return $text;
	
}

function array_replace_value ($arr, $search, $replace) {
	
	for ($array_replace_value_count=0; $array_replace_value_count<count($arr); $array_replace_value_count++ ) {
		if ($arr[$array_replace_value_count]==$search) {
			$arr[$array_replace_value_count]=$replace;
		}
	}
	
	return $arr;
}

?>
