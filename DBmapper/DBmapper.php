<?php

namespace DBmapper;

class DBmapper {
	
	//database connection object
	private $conn;
	
	public function __construct($conn=null) {
	
		$this->conn = $conn;
		 
	}
	
	public function test() {
		echo "DBmapper test";
	}

}

?>
