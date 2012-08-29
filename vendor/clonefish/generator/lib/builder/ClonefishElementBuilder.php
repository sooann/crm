<?php
	
class ClonefishElementBuilder extends ClassBuilder {
	
	protected $getHTMLCode;
	protected $getHTMLRowCode;
	protected $getValueCode;
	protected $setValueCode;
	protected $getScriptCode;
	protected $otherCode;
	
	public function getGetHTMLCode() {
		return $this->getHTMLCode;
	}
	
	public function setGetHTMLCode($v) {
		$this->getHTMLCode = $v;
	}
	
	public function getGetHTMLRowCode() {
		return $this->getHTMLRowCode;
	}
	
	public function setGetHTMLRowCode($v) {
		$this->getHTMLRowCode = $v;
	}
	
	public function getGetValueCode() {
		return $this->getValueCode;
	}
	
	public function setGetValueCode($v) {
		$this->getValueCode = $v;
	}
	
	public function getSetValueCode() {
		return $this->setValueCode;
	}
	
	public function setSetValueCode($v) {
		$this->setValueCode = $v;
	}
	
	public function getGetScriptCode() {
		return $this->getScriptCode;
	}
	
	public function setGetScriptCode($v) {
		$this->getScriptCode = $v;
	}
	
	public function getOtherCode() {
		return $this->otherCode;
	}
	
	public function setOtherCode($v) {
		$this->otherCode = $v;
	}
	
	public function __construct() {
		$this->setExtends("element");
		parent::__construct();
	}
	
	public function build() {
		
		if ($this->getGetHTMLCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "getHTML";
			$array['body'] = $this->getGetHTMLCode();
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
			
		}
		
		if ($this->getGetHTMLRowCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "getHTMLRow";
			$array['body'] = $this->getGetHTMLRowCode();
			$array['arguements'] = "\$layout, \$errorstyle, \$showerroricon, \$erroricon";
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
		}
		
		if ($this->getGetValueCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "getValue";
			$array['body'] = $this->getGetValueCode();
			$array['arguements'] = "\$magic_quotes_gpc";
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
		}
		
		if ($this->getSetValueCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "setValue";
			$array['body'] = $this->getSetValueCode();
			$array['arguements'] = "\$value, \$magic_quotes_gpc";
			$array['public'] = true;
			$fb->fromArray($array);
			$fb->build($this);
		}
		 
		if ($this->getGetScriptCode()!="") {
			$array = array();
			$fb = new FunctionBuilder();
			$array['name'] = "getScripts";
			$array['body'] = $this->getGetScriptCode();
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