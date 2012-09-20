
<?php
	
/**
 *
 * 
 *
 * @name	amyeditor
 * @type	CLASS
 *
*/
		
class amyeditor extends element {
var $theme='concept';
var $bundle = 'php';
var $language = 'php';

	public function getHTML() {
		return 
				      '<textarea ' . 
				          'id="' . $this->_getHTMLId() . '" ' . 
				          'name="' . $this->name . '" ' .
				          $this->html .' -amy-enabled="true" >' .
				        htmlspecialchars( $this->value ) . 
				      '</textarea>
					   <script type="text/javascript" src="/crm/vendor/amyeditor/api/embed/amy.php?theme='.$this->theme.'&bundle='.$this->bundle.'&language='.$this->language.'"></script>';
	}

}

?>
		