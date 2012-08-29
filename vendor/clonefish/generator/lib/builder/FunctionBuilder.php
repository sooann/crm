<?php

/**
 * @access public
 * @author sooann
 * @package builder
 */
 
class FunctionBuilder extends BaseBuilder {
	
	protected $static;
	protected $final;
	protected $public;
	protected $protected;
	protected $private;
	protected $arguements;
	
	public function getStatic() {
		return $this->static;
	}
	
	public function setStatic($v) {
		$this->static = $v;
	}
	
	public function getFinal() {
		return $this->final;
	}
	
	public function setFinal($v) {
		$this->final = $v;
	}
	
	public function getPublic() {
		return $this->public;
	}
	
	public function setPublic($v) {
		$this->public = $v;
	}
	
	public function getProtected() {
		return $this->protected;
	}
	
	public function setProtected($v) {
		$this->protected = $v;
	}
	
	public function getPrivate() {
		return $this->private;
	}
	
	public function setPrivate($v) {
		$this->private = $v;
	}
	
	public function getArguements() {
		return $this->arguements;
	}
	
	public function setArguements($v) {
		$this->arguements = $v;
	}
	
	
	public function __construct() {
		$this->setType("FUNCTION");
		parent::__construct();
	}
	
	/**
	 * @access public
	 */
	 
	public function build($c=null) {
				
		$decb = new DeclarationHelper($this);
		
		$str = "";
		//$str .= $cb->build()."\n";
		$str .= "\t".$decb->build()." {\n";
		if ($this->getVariables()!="") {
			$str .= $this->getVariables();
		}
		$str .= "\t\t".str_replace("\n","\n\t\t", $this->getBody())."\n";
		$str .= "\t}\n\n";
		
		if ($c!=null) {
			$c->appendBody($str);
			return $str;
		} else {
			return $str;
		}
		
	}
}
?>