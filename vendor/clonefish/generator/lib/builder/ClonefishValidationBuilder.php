<?php
	
class ClonefishValidationBuilder extends ClassBuilder {
	
	protected $JSCode;
	protected $isValidCode;
	protected $otherCode;
	
	public function getJSCode() {
		return $this->JSCode;
	}
	
	public function setJSCode($v) {
		$this->JSCode = $v;
	}
	
	public function getIsValidCode() {
		return $this->isValidCode;
	}
	
	public function setIsValidCode($v) {
		$this->isValidCode = $v;
	}
	
	public function getOtherCode() {
		return $this->otherCode;
	}
	
	public function setOtherCode($v) {
		$this->otherCode = $v;
	}
	
	public function __construct() {
		$this->setExtends("validation");
		parent::__construct();
	}
	
	public function build() {
		
		if ($this->getJSCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "getJSCode";
			$array['body'] = $this->getJSCode();
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
		}
		
		if ($this->getIsValidCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "isValid";
			$array['body'] = $this->getIsValidCode();
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
		}
		
		
		if ($this->getOtherCode()!="") {
			$this->appendBody($this->otherCode);
		}
		
		return parent::build();
	}
}
	
?>