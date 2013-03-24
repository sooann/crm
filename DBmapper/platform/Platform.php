<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace DBmapper\Platform;

abstract class Platform {

    /**
     * Constructor.
     */
    public function __construct() {}
    
    /**
     * Gets the name of the platform.
     *
     * @return string
     */
    abstract public function getName();
    
    // read parameters from local array
    // call wrapper dbal function
    abstract public function insert($param, $table);  
    
    // read parameters from local array
    // call warapper dbal function
    abstract public function update($param, $table, $filter); 
    
    // get database connection from platform
    abstract public function getConnection();
    
    public static function getPlatform ($platform) {
        //find platform in array of available platform
        return true;
    }
    
}
?>
