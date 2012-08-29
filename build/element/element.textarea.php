
<?php
	
/**
 *
 * 
 *
 * @name	textarea
 * @type	CLASS
 *
*/
		
class textarea extends element {
	public function getHTML() {
		return 
		      '<textarea ' . 
		          'id="' . $this->_getHTMLId() . '" ' . 
		          'name="' . $this->name . '" ' .
		          $this->html .'>' .
		        htmlspecialchars( $this->value ) . 
		      '</textarea>';
	}

}

?>
		