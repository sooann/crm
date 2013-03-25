<?php

namespace DBmapper;

use DBmapper\Platform;


final class DBmapper {
	
    //current table string
    private $_table;
    
    //current update filter
    private $_filter;
    
    //wrapper platform
    private $_platform; //object 
    
    //DB connection
    private $_conn;
    
    //array holder for db params
    private $_param;
	
	public function __construct($table=null,$platform=null) {
        
        $this->_table = $table;
        
        //DBAL Platform
        $this->loadPlatform($platform);
        
        //load field metadata from database
        if ($this->_table!="") {
            
        }
	}
	
	public function test() {
		echo "DBmapper test";
	}
    
    public function setPlatform ($platform) {
        
        return $this->loadPlatform($platform);
        
    }
    
    public function getPlatform () {
        
        return $this->_platform;
        
    }
    
    private function loadPlatform ($platform) {
        
        $this->_platform = Platform\PlatformFactory::getPlatform($platform);
        $this->_conn = $this->_platform->getConnection();
        
    }
    
    public function setTable ($table) {
        $this->_table = $table;
    }
    
    public function getTable () {
        return $this->_table;
    }
    
    public function setFilter ($filter) {
        $this->_filter = $filter;
    }
    
    public function getFilter () {
        return $this->_filter;
    }
    
    public function addParameter ($field, $value) {
        //check if field exist
        //override existing value
    }
    
    public function removeParameter ($field) {
        //find existing field
        //remove from array
    }
    
    public function insert () {
        if ($this->_table==null || $this->_table=="") {
            throw \DBmapper\DBmapperException::tableNotFound();
        }
        $this->_platform->insert($this->_param, $this->_table);
    }
    
    public function update ($filter=null) {
        
        if ($filter != null) {
            $this->_filter=$filter;
        }
        
        if ($this->_table==null || $this->_table=="") {
            throw \DBmapper\DBmapperException::tableNotFound();
        }
        
        $this->_platform->update($this->_param, $this->_table, $this->_filter);
    }
}

?>
