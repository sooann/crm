<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require 'functions.php';
require 'includes/SQLWrapper.php';
require 'includes/Command.php';

global $DBRegion,$conn;

$DBRegion = "CRMSGP2";

date_default_timezone_set('Asia/Singapore'); 

session_start();

//testing MYSQL Connection
$conn = SQLWrapperConfiguration::setConnection("localhost:3306", "root", "sooann", "CRMSGP2");

//Security settings - webpage tracking
//webtracking functionalities
$webpageTracking = new SQLWrapper("SEC_Webpagetracking");
	
$webpageTracking->addparam('Url', $_SERVER['REQUEST_URI'], 'text');
$webpageTracking->addparam('Requestmethod', $_SERVER['REQUEST_METHOD'], 'text');

if ($_SERVER['REQUEST_METHOD']=="POST") {
    ob_start();
    var_dump($_POST);
    $postdump = ob_get_clean();
    $webpageTracking->addparam('Postdata', $postdump, 'text');
}

$webpageTracking->addparam('Querystring', $_SERVER['QUERY_STRING'], 'text');

$webpageTracking->addparam('Httpuseragent', $_SERVER['HTTP_USER_AGENT'], 'text');
$webpageTracking->addparam('Remoteaddr', $_SERVER['REMOTE_ADDR'], 'text');

if(isset($_SERVER['HTTP_REFERER'])) {
    $webpageTracking->addparam('Httpreferer', $_SERVER['HTTP_REFERER'], 'text');
}

$webpageTracking->addparam('Sessionid', session_id(), 'text');

if(isset($_SESSION["user_id"])) {
    if(!is_nan($_SESSION["user_id"])) {
        $webpageTracking->addparam('Createdby', $_SESSION["user_id"], 'int');
    }
}

$webpageTracking->addparam('createddate', now(), 'date');

$webpageTracking->insert();

?>
