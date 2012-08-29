
<?php
	
/**
 *
 * 
 *
 * @name	inputTextRequired
 * @type	CLASS
 *
*/
		
class inputTextRequired extends validation {
	public function getJSCode() {
		$code = '';
		    $fieldvalue = $this->getJSField( $this->element ) . '.value';
		
		    $code .= 
		      'errors.addIf( \'' . $this->element->_getHTMLId() . '\', ' . $fieldvalue . '.match(/[\s]*/m) != 
		        '. $fieldvalue . ', "' . 
		        $this->_jsescape( sprintf(
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_TEXT ),
		          $this->element->getDisplayName()
		        ) ) .
		      '" );' . "\n"
		      ;
		
		    return $this->injectDependencyJS( $code );
		$code = '';
		    $fieldvalue = $this->getJSField( $this->element ) . '.value';
		
		    $code .= 
		      'errors.addIf( \'' . $this->element->_getHTMLId() . '\', ' . $fieldvalue . '.match(/[\s]*/m) != 
		        '. $fieldvalue . ', "' . 
		        $this->_jsescape( sprintf(
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_TEXT ),
		          $this->element->getDisplayName()
		        ) ) .
		      '" );' . "\n"
		      ;
		
		    return $this->injectDependencyJS( $code );
		$code = '';
		    $fieldvalue = $this->getJSField( $this->element ) . '.value';
		
		    $code .= 
		      'errors.addIf( \'' . $this->element->_getHTMLId() . '\', ' . $fieldvalue . '.match(/[\s]*/m) != 
		        '. $fieldvalue . ', "' . 
		        $this->_jsescape( sprintf(
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_TEXT ),
		          $this->element->getDisplayName()
		        ) ) .
		      '" );' . "\n"
		      ;
		
		    return $this->injectDependencyJS( $code );
	}

	public function isValid() {
		$results = Array();
		
		    if ( $this->checkDependencyPHP() ) {
		
		    if ( !strlen( trim( $this->element->getValue( 0 ) ) ) ) {
		        
		      $message = 
		        sprintf(
		          $this->selecthelp( $this->element, CF_STR_REQUIRED_TEXT ),
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
		