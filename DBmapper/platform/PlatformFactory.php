<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace DBmapper\Platform;

use DBmapper\DBmapperException;

final class PlatformFactory {
    
    const DBAL = 'DBAL';
    
    /** Map of already instantiated type objects. One instance per type (flyweight). */
    private static $_typeObjects = array();

    /** The map of supported doctrine mapping types. */
    private static $_typesMap = array(
        self::DBAL => 'DBmapper\Platform\DBALPlatform',
    );

    /* Prevent instantiation and force use of the factory method. */
    final private function __construct() {}
    
    public static function getPlatform ($platform) {
        
        
        if ($platform==null || $platform=="") {
            
        }
        
        //find platform in array of available platform
        if ( ! isset(self::$_typeObjects[$platform])) {
            if ( ! isset(self::$_typesMap[$platform])) {
                throw DBmapperException::unknownPlatformType($platform);
            }
            //check platform whether extends Abstractplatform or implements InterfacePlatform
            
            self::$_typeObjects[$platform] = new self::$_typesMap[$platform]();
        }
        
        return self::$_typeObjects[$platform];
    }
    
    private function checkplatform ($platform) {
        
    }
    
}
?>
