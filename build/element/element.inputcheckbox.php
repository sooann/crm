
<?php
	
/**
 *
 * 
 *
 * @name	inputCheckbox
 * @type	CLASS
 *
*/
		
class inputCheckbox extends element {
var $onvalue  = 1;
var $offvalue = 0;
var $value;

	function __construct($name, $configvalues) {
		$this->name = $name;
		    foreach ( $configvalues as $key => $value )
		      $this->$key = $value;
	}


	public function getHTML() {
		return
		      '<input ' .
		        'type="checkbox" ' .
		        'name="' . $this->name . '" ' .
		        'id="' . $this->_getHTMLId() . '" ' .
		        'value="' . htmlspecialchars( $this->onvalue ) . '"' .
		        (
		          $this->getValue( 0 ) == $this->onvalue ? ' checked="checked" '
		          :
		            ''
		        ).
		        ' ' . $this->html .
		      ' />' . "\n";
	}

	public function getValue($magic_quotes_gpc) {
		if ( $this->value == $this->onvalue ) 
		      $value = $this->onvalue;
		    else
		      $value = $this->offvalue;
		
		    return $this->_prepareOutput( $value, $magic_quotes_gpc );
	}

	public function setValue($value, $magic_quotes_gpc) {
		// if there is no 'onvalue' defined, browsers send 'on' as default
		    // value
		
		    if (
		         ( $this->_prepareInput( $value, $magic_quotes_gpc ) == $this->onvalue )
		         ||
		         ( $value === 'on' ) 
		       ) {
		      $this->value = $this->onvalue;
		    }
		    else {
		      $this->value = $this->offvalue;
		    }
		
		    return true;
	}

}

?>
		