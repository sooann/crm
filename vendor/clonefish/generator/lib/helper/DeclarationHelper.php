<?php

/**
 * @access public
 * @author sooann
 * @package builder
 */
class DeclarationHelper extends BaseHelper {

	/**
	 * @access public
	 */
	public function build($name=null,$value=null,$visible=null) {
		$str="";
		
		$this->object;
		
		if ($this->object->getType()=="CLASS") {
			
			if ($this->object->getAbstract()) {
				$str .= "abstract ";		
			} else if ($this->object->getFinal()) {
				$str .= "final ";
			}
		
			$str .= "class ".$this->object->getName()." ";
		
			if ($this->object->getExtends()!=null) {
				$str .= "extends ".$this->object->getExtends()." ";
			}
		
			if ($this->object->getImplements()!=null) {
				$str .= "implements ".$this->object->getImplements()." ";
			}
		} else if ($this->object->getType()=="FUNCTION") {
			if ($this->object->getStatic()) {
				$str .= "static ";
			}
		
			if ($this->object->getFinal()) {
				$str .= "final ";
			}
		
			if ($this->object->getPublic()) {
				$str .= "public ";
			} else if ($this->object->getProtected()) {
				$str .= "protected ";
			} else if ($this->object->getPrivate()) {
				$str .= "private ";
			}
			
			$str .= "function ".$this->object->getName()."(".$this->object->getArguements().")";
		} else {
			
			/*
			if ($this->getPublic()) {
				$str .= "public ";
			} else if ($this->getProtected()) {
				$str .= "protected ";
			} else if ($this->getPrivate()) {
				$str .= "private ";
			}
			*/
			if ($name!=null) {
				if ($visible!=null) {
					$str .=$visible." ";
				}
	
				$str .= "\$".$name;
			
				if ($value!=null) {
					$str .= " = ".$value;
				}
				
				$str .= ";";
			}
		}
		
		return $str;
	}
}
?>