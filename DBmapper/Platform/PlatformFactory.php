<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace DBmapper\Platform;

use DBmapper\DBmapperException;

final class PlatformFactory extends DBInterfacePlatform {
    
    /** Map of already instantiated type objects. One instance per type (flyweight). */
    private static $_typeObjects = array();

    /* Prevent instantiation and force use of the factory method. */
    final private function __construct() {}
    
    public static function getPlatform ($platform) {
        
        if ($platform==null || $platform=="") {
            if (count(self::$_typesMap)>0) {
                $platform = array_keys(self::$_typesMap)[0];    
            } else {
                throw DBmapperException::PlatformTypeNotFound();
            }
        }
        
        //find platform in array of available platform
        if ( ! isset(self::$_typeObjects[$platform])) {
            if ( ! isset(self::$_typesMap[$platform])) {
                throw DBmapperException::unknownPlatformType($platform);
            }
            
            //check if class is not loaded
            if (class_exists(self::$_typesMap[$platform],false)) {
                //load class
                exec("use ".self::$_typesMap[$platform].";");
            }
            
            //check platform whether extends Abstractplatform or implements InterfacePlatform
            if (is_subclass_of(self::$_typesMap[$platform], 'AbstractPlatform')) {
                self::$_typeObjects[$platform] = new self::$_typesMap[$platform]();
            } else {
                throw DBmapperException::invalidPlatformClass($platform, self::$_typesMap[$platform]);
            }
        }
        
        return self::$_typeObjects[$platform];
    }
    
}
?>
