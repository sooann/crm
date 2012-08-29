<?php
/**
 * @access public
 * @author sooann
 * @package builder
 */
abstract class ObjectBase {
	protected $name;
	protected $description;
	protected $type;
	protected $object;
	protected $body;
	protected $variables;

	public function __construct($c=null) {
		//referencing self for inheritence
		if ($c!=null) {
			$this->setObject($c);
		} else {
			$this->setObject($this);
		}
	}

	/**
	 * @access public
	 */
	public function getVariables() {
		return $this->variables;
	}

	/**
	 * @access public
	 * @param name
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setVariables($v) {
		$this->variables = $v;
	}
	
	/**
	 * @access public
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @access public
	 * @param name
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @access public
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @access public
	 * @param description
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @access public
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @access public
	 * @param type
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @access public
	 */
	public function getObject() {
		return $this->object;
	}

	/**
	 * @access public
	 * @param object
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setObject($object) {
		$this->object = $object;
	}

	/**
	 * @access public
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * @access public
	 * @param body
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setBody($body) {
		$this->body = $body;
	}
	
	/**
	 * @access public
	 * @param str
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function appendBody($str) {
		$this->body .= $str;
	}
	

	/**
	 * @access public
	 * @param c
	 */
	public function getProperties($c = null) {
		if ($c==null) {
			$array = array_keys(get_class_vars(get_called_class()));
		} else {
			$array = array_keys(get_class_vars(get_class($c)));
		}
		$prop = array();
		foreach ($array as $property) {
			if ($property!="object") {
				if ($property!=null) {
					if ( method_exists($this, "set".ucfirst($property)) || method_exists($this, "get".ucfirst($property)) ) {
						array_push($prop,$property);
					}
				}
			}
		}
		return $prop;
	}

	/**
	 * @access public
	 */
	public function toArray($array = null) {
		if ($array==null){
			$array = get_object_vars($this);	
		} else {
			$array = get_object_vars($array);
		}
		$prop = array();
		foreach ($array as $key => $value) {
			 if ($key!="object") {
				 if (gettype($value)=="object") {
					 $prop[$key]=$this->toArray($value);
				 } else {
					 $prop[$key]=$value;				 	
				 }
			 }
		}
		return $prop;
	}

	/**
	 * @access public
	 * @param arr
	 */
	public function fromArray($arr) {
		$properties = $this->getProperties();
		foreach ($properties as $property) {
			if (array_key_exists($property, $arr)) {
				if (is_array($arr[$property])) {
					if (method_exists($this,'get'.ucfirst($property))) {
						eval("\$funct = \$this->get".ucfirst($property)."();");
						$funct->fromArray($arr[$property]);
					}
				} else if ($arr[$property]!=null) {
					$this->$property=$arr[$property];
				}
			}
		}
	}

	/**
	 * @access public
	 * @param name
	 */
	public function getByName($name) {
		if (property_exists($this, $name)) {
			return $this->$name;
		}
		return null;
	}

	/**
	 * @access public
	 * @param name
	 * @param value
	 */
	public function setByName($name, $value) {
		if (property_exists($this, $name)) {
			$this->$name = $value;
		} else {
			return null;
		}
	}
	
	public function buildForFile() {
		return "
<?php
	".$this->build()."
?>
		";
	}
	
	
}
?>