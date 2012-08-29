
<?php
	
/**
 *
 * 
 *
 * @name	inputRadioRequired
 * @type	CLASS
 *
*/
		
class inputRadioRequired extends validation {
	public function getJSCode() {
		$code = '';
		
		    $code .=
		      'errors.addIf( \'' . $this->element->_getHTMLId() . '\', ' . 
		        'clonefishGetFieldValue( ' . 
		          '"' . $this->form->name . '", ' . 
		          '"' . $this->element->name. '", ' .
		          '"' . $this->element->type . '"' . 
		        '), "' . 
		        $this->_jsescape( sprintf( 
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_RADIO ), 
		          $this->element->getDisplayName() 
		        ) ) . 
		      '" );'."\n"
		      ;
		
		    return $this->injectDependencyJS( $code );
	}

	public function isValid() {
		$results = Array();
		
		    if ( $this->checkDependencyPHP() ) {
		
		    if ( !isset( $this->element->values[ $this->element->getValue( 0 ) ] ) ) {
		      $message = 
		        sprintf(
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_RADIO ),
		          $this->element->getDisplayName()
		        );
		      $results[] = $message;
		      $this->element->addMessage( $message );
		      }
		
		    }
		
		    return $results;
	}

}

?>
		