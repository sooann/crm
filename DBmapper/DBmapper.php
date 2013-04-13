<?php

namespace DBmapper;

use DBmapper\Platform\PlatformFactory;

final class DBmapper {
	
    //current table string
    private $_table;
    
    //current update filter
    private $_filter;
    
    //current object mapping
    private $_map;
    
    //wrapper platform
    private $_platform; 
    
    //DB connection
    private $_conn;
    
    //array holder for db params
    private $_param;
	
	public function __construct($table=null,$platform=null) {
        
        //DBAL Platform
        $this->setPlatform($platform);
        
        //load field metadata from database
        if ($table!="" && $table!=null) {
            $this->setTable($table);
        }
        
	}
    
    public function getMap() {
        return $this->_map;
    }
    
    public function loadMap () {
        $this->_map = $this->_platform->getMetadata($this->_table);
    }
    
    public function setPlatform ($platform) {
        
        $this->_platform = PlatformFactory::getPlatform($platform);
        $this->_conn = $this->_platform->getConnection();
        
    }
    
    public function getPlatform () {
        return $this->_platform;
    }
    
    public function setTable ($table) {
        $this->_table = $table;
        $this->loadMap();
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
        //find existing fieldbindTypedValues
        //remove from array
    }
    
    public function insert () {
        
        if ($this->_table==null || $this->_table=="") {
            throw DBmapperException::tableNotFound();
        }
        $this->_platform->insert($this->_param, $this->_table);
        
    }
    
    public function update ($filter=null) {
        
        if ($filter != null) {
            $this->_filter=$filter;
        }
        
        if ($this->_table==null || $this->_table=="") {
            throw DBmapperException::tableNotFound();
        }
        
        $this->_platform->update($this->_param, $this->_table, $this->_filter);
    }
}

?>
