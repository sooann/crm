<?php
	
class BaseController extends ObjectBase {
	
	private $router;
	protected $params;
	
	public function getRouter() {
		return $this->router;
	}
	
	public function setRouter($v) {
		$this->router = $v;
	}
	
	public function getParams() {
		return $this->params;
	}
	
	public function getParam($key) {
		return $this->params[$key];
	}
	
	public function setParams($v) {
		$this->params = $v;
	}
	
	public function __construct($router,$params) {
		$this->setRouter($router);
		$this->setParams($params);
	}	
}
	
?>