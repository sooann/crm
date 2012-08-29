
<?php
	
/**
 *
 * 
 *
 * @name	template
 * @type	CLASS
 *
*/
		
class template extends element {
var $readonly = 1;
  var $inheriterrors = 0;

  var $_hasErrors = false;

	public function getHTML() {
		preg_match_all('/\%(.*)\%/Umi', $this->value, $results );
		
		    $replaces = Array();
		
		    foreach ( $results[ 1 ] as $result ) {
		
		      $element = $this->form->getElementByName( $result );
		      if ( is_object( $element ) ) {
		
		        $savedisplay = $element->display;
		        $element->display = 1;
		        $replaces[ '%' . $result . '%' ] =
		          $element->getHTMLRow(
		            $this->form->layout,
		            $this->form->errorstyle,
		            $this->form->showerroricon,
		            $this->form->erroricon
		          );
		        $element->display = $savedisplay;
		
		        if ( $this->inheriterrors && 
		             (
		               count( $element->errormessages ) ||
		               @$element->_hasErrors
		             )
		           )
		          $this->_hasErrors = true;
		
		      }
		      else
		        die( sprintf( CF_ERR_TEMPLATE_MISSING_ELEMENT, $this->name, $result ) );
		
		    }
		
		    return strtr( $this->value, $replaces );
	}

}

?>
		