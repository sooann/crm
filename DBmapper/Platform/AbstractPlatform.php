<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper\Platform;

abstract class AbstractPlatform {
    
    /**
     * Constructor.
     */
    abstract public function __construct();
    
    /**
     * Gets the name of the platform.
     *
     * @return string
     */
    abstract public function getName();
    
    /**
     * read parameters from local array and translate to DB layer insert
     * 
     * @param array $param      Array of Parameters
     * @param string $table     Database table name
     * @return int $newid       ID of new row created
     * 
     */
    abstract public function insert($param, $table);  
    
    /**
     * read parameters from local array and translate to DB layer update
     * 
     * @param array $param      Array of Parameters
     * @param string $table     Database table name
     * @param string $filter    Table filter to narrow the update
     * 
     */
    abstract public function update($param, $table, $filter); 
    
    /**
     * Gets the current DB Connection of the platform.
     *
     * @return connection   DB Connection Object
     * 
     */
    abstract public function getConnection();
    
    /**
     * Gets the DBmapper Object based on table name
     *
     * @return array        Array of metadata information
     * 
     */
    abstract public function getMetadata ($table);
    
    /**
     * Gets the current DB Configuration of the platform.
     *
     * @return config       DB Connection Configuration
     * 
     */
    abstract public function getConfig ();
    
}

?>
