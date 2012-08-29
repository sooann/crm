<?php
	
//testing clonefish

include "vendor/clonefish/runtime/clonefish.php";
include "vendor/clonefish/runtime/messages_en.php";

$config = array(

	'testingtext' => array(
		'type' => 'inputText',
		'displayname' => 'Testing Text Input',
		'validation' => array()
	),
	
	'testingtextarea' => array(
		'type' => 'textarea',
		'displayname' => 'Comments',
		'validation' => array()
	)
);

// create the form object
$clonefish = new clonefish( 'loginform', 'test.php', 'POST' );

// setup codepage so your data will be handled
// perfectly by the appropriate string functions
$clonefish->codepage         = 'utf-8';
$clonefish->multibytesupport = 'multibyteutf8';

// add the form elements (fields) pre-filled with
// values from $_POST
$clonefish->addElements( $config, $_POST, get_magic_quotes_gpc() ); 

// validate the form if the form has been submitted
if ( count( $_POST ) && $clonefish->validate() ) {
  // form is valid, go and store values in database, etc.
  // $clonefish->getElementValues() provides a 
  // normalized value array.
}

// if the form wasn't submitted yet or the validation
// had failed, show the form (automatically
// including error messages)
$body = "";
$body .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head><body>';
$body .= "<h1>the form</h1>";
$body .= $clonefish->gethtml();
$body .= "<PRE>" . var_export( $_POST, 1 ) . "</PRE>";
$body .= '<h1>$clonefish->getElementValues( 0 )</h1>';
$body .= "<PRE>" . var_export( $clonefish->getElementValues( 0 ), 1 ) . "</PRE>";
$body .= "</body></html>";
echo $body;

?>