<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper;

class Configuration {
    
    private static $_config;
    
    final public function __construct () {}
    
    public static function setConfig ($config) {
        self::$_config = $config;
    }
    
    public static function getConfig () {
        return self::$_config;
    }
}
?>
