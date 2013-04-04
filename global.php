<?php

global $strDBRegion;

$strDBRegion = "SGP";

include_once "functions.php";

date_default_timezone_set('Asia/Singapore'); 


//webtracking functionalities
$arrWebpageTracking = array();
$webpageTracking = new SecWebpagetracking();
	
$arrWebpageTracking['Url'] = $_SERVER['REQUEST_URI'];
$arrWebpageTracking['Requestmethod'] = $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD']=="POST") {
	ob_start();
	var_dump($_POST);
	$postdump = ob_get_clean();
	$arrWebpageTracking['Postdata'] = $postdump;
}

$arrWebpageTracking['Querystring'] = $_SERVER['QUERY_STRING'];

$arrWebpageTracking['Httpuseragent'] = $_SERVER['HTTP_USER_AGENT'];
$arrWebpageTracking['Remoteaddr'] = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) {
	$arrWebpageTracking['Httpreferer'] = $_SERVER['HTTP_REFERER'];
}

$arrWebpageTracking['Sessionid'] = session_id();
$webpageTracking->fromArray($arrWebpageTracking);

$webpageTracking->save();

?>