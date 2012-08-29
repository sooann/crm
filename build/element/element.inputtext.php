
<?php
	
/**
 *
 * 
 *
 * @name	inputText
 * @type	CLASS
 *
*/
		
class inputText extends element {
	public function getHTML() {
		return 
		       '<input ' .
		         $this->html . ' ' .
		         'type="text" ' .
		         'name="' . $this->name . '" ' .
		         'id="' . $this->_getHTMLId() . '" ' .
		         'value="' . htmlspecialchars( $this->value ) . '" ' . 
		       ' />';
	}

}

?>
		