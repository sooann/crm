<?php

/**
 * @access public
 * @author sooann
 * @package builder
 */
 
class ClassBuilder extends BaseBuilder {
	
	protected $extends;
	protected $implements;
	protected $abstract;
	protected $final;
	protected $constructor;
	protected $contstructorArgs;
	protected $include;
	
	public function getInclude() {
		return $this->include;
	}
	
	public function setInclude($v) {
		$this->include=$v;
	}

	public function getAbstract() {
		return $this->abstract;
	}
	
	public function setAbstract($v) {
		$this->abstract = $v;
	}
	
	public function getFinal() {
		return $this->final;
	}
	
	public function setFinal($v) {
		$this->final=$v;
	}
	
	public function getExtends() {
		return $this->extends;
	}
	
	public function setExtends($v) {
		$this->extends = $v;
	}
	
	public function getImplements() {
		return $this->implements;
	}
	
	public function setImplements($v) {
		$this->implements = $v;
	}
	
	public function getConstructor() {
		return $this->constructor;
	}
	
	public function setConstructor($v) {
		$this->constructor = $v;
	}
	
	public function getConstructorArgs() {
		return $this->constructorArgs;
	}
	
	public function setConstructorArgs($v) {
		$this->constructorArgs = $v;
	}
	
	public function __construct() {
		$this->setType("CLASS");
		parent::__construct();
	}
	
	/**
	 * @access public
	 */
	 
	public function build($c=null) {
		
		$cb = new CommentHelper($this);
		$decb = new DeclarationHelper($this);
		
		$str = "";
		if ($this->include!="") {
			$str .= $this->include;
		}
		$str .= $cb->build()."\n";
		$str .= $decb->build()."{\n";
		if ($this->getVariables()!="") {
			$str .= $this->getVariables()."\n\n";
		}
		if ($this->getConstructor()!="") {
			$const = new FunctionBuilder();
			$const->setName("__construct");
			$const->setArguements($this->getConstructorArgs());
			$const->setBody($this->getConstructor());
			$str .= $const->build()."\n";
		}
		$str .= $this->getBody();
		$str .= "}\n";
		
		if ($c!=null) {
			$c->appendBody($str);
			return $str;
		} else {
			return $str;
		}
	}
	
	public function buildForFile() {
		return "
<?php
	".str_replace("<CR>","\r",$this->build())."
?>
		";
	}
}
?>