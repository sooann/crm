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
        
        //check if DBmapper system table exist
        $qb = $this->_conn->createQueryBuilder();
        $qb->select()
            ->from('DBM_fields','DBF')
            ->innerJoin('DBF', 'DBM_Table', 'DBT', $qb->expr()->eq('DBF.table_id', 'DBT.table_id'))
            ->where($qb->expr()->like('DBT.name', ':param1'));
        $qb->setParameters(array(param1=>$table));
				echo $qb->getSQL();
        $stmt = $this->_conn->query($qb->getSQL());
        
        while ($row = $stmt->fetch()) {
            //get associate type objects with metadata
            
        }
        
    }
    
    public function insert($param, $table) {
        
    }
    
    public function update($param, $table, $filter) {
        
    }
    
}

?>
