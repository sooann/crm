<?php
	
	require_once "autoloader/autoloader.php";
	
	/*
	$my_class = new ClassBuilder();	
	$array = array();
	$array['name']="TestingEvalClass";
	$array['description'] = "Clonefish evaluation class for testing puroposes";
	$my_class->fromArray($array);
	
	$array = array();
	$fb = new FunctionBuilder();
	$array['name'] = "__construct";
	$array['body'] = "echo \"testing\"; ";
	$array['public'] = true;
	$fb->fromArray($array);
	$fb->build($my_class);
	*/
	
	$testvalid = new ClonefishValidationBuilder ();
	$testvalid->setName("inputRadioRequired");
	$testvalid->setJSCode("    
\$code = '';

\$code .=
  'errors.addIf( \\'' . \$this->element->_getHTMLId() . '\\', ' . 
    'clonefishGetFieldValue( ' . 
      '\"' . \$this->form->name . '\", ' . 
      '\"' . \$this->element->name. '\", ' .
      '\"' . \$this->element->type . '\"' . 
    '), \"' . 
    \$this->_jsescape( sprintf( 
      \$this->selecthelp( \$this->element, CF_STR_REQUIRED_RADIO ), 
      \$this->element->getDisplayName() 
    ) ) . 
  '\" );'.\"\\n\"
  ;

return \$this->injectDependencyJS( \$code );
");
	$testvalid->setIsValidCode("
	    
\$results = Array();

if ( \$this->checkDependencyPHP() ) {

if ( !isset( \$this->element->values[ \$this->element->getValue( 0 ) ] ) ) {
  \$message = 
    sprintf(
      \$this->selecthelp( \$this->element, CF_STR_REQUIRED_RADIO ),
      \$this->element->getDisplayName()
    );
  \$results[] = \$message;
  \$this->element->addMessage( \$message );
  }

}

return \$results;
");
	
	echo $testvalid->buildForFile();
		
?>