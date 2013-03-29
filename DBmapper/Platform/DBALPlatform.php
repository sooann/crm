<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper\Platform;

class DBALPlatform extends AbstractPlatform {
    
    // DB Connection object
    private $_conn;
    
    // DB Configuration Object
    private $_config;
    
    public function __construct() {
        $this->_config = new \Doctrine\DBAL\Configuration();
        $this->_conn = \Doctrine\DBAL\DriverManager::getConnection(\DBmapper\Configuration::getConfig(), $this->_config);
    }
    
    public function getName() {
        return "DBAL";
    }

    public function getConnection() {
        return $this->_conn;
    }
    
    public function getConfig() {
        return $this->_config;
    }
    
    public function getMetadata($table) {
        //use query builder
        //get fields from DBmapper table
        
    }
    
    public function insert($param, $table) {
        
    }
    
    public function update($param, $table, $filter) {
        
    }
    
}

?>
