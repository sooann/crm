
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
				  str_replace("}","&#125",str_replace("{", "&#123", htmlspecialchars( $this->value ))) . 
		      '</textarea>';
	}

}

?>
		