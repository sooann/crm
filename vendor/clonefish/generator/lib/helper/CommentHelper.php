<?php

/**
 * @access public
 * @author sooann
 * @package helper
 */
class CommentHelper extends BaseHelper {

	/**
	 * @access public
	 */
	public function build() {
		$str = "
/**
 *
 * ".$this->object->getDescription()."
 *
 * @name	".$this->object->getName()."
 * @type	".$this->object->getType()."
 *
*/
		";
		
		return $str;
	}
}
?>