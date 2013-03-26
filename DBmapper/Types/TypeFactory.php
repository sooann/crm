<?php

namespace DBmapper\Types;

use DBmapper\DBmapperException;

final class TypeFactory extends DBInterfaceType {
    
    /** Map of already instantiated type objects. One instance per type (flyweight). */
    private static $_typeObjects = array();

    /* Prevent instantiation and force use of the factory method. */
    final private function __construct() {}
    
    public static function getType ($name) {
        
        if ($name==null || $name=="") {
            if (count(self::$_typesMap)>0) {
                $name = array_keys(self::$_typesMap)[0];    
            } else {
                throw DBmapperException::unknownColumnType($name);
            }
        }
        
        //find platform in array of available platform
        if ( ! isset(self::$_typeObjects[$name])) {
            if ( ! isset(self::$_typesMap[$name])) {
                throw DBmapperException::unknownColumnType($name);
            }
            
            //check platform whether extends Abstractplatform or implements InterfacePlatform
            if (is_subclass_of(self::$_typesMap[$name], 'AbstractType')) {
                self::$_typeObjects[$name] = new self::$_typesMap[$name]();
            } else {
                throw DBmapperException::invalidColumnTypeClass(self::$_typesMap[$name]);
            }
        }
        
        return self::$_typeObjects[$name];
    }
    
    /**
     * Checks if exists support for a type.
     *
     * @static
     * @param string $name Name of the type
     * @return boolean TRUE if type is supported; FALSE otherwise
     */
    public static function hasType($name)
    {
        return isset(self::$_typesMap[$name]);
    }
    
    /**
     * Get the types array map which holds all registered types and the corresponding
     * type class
     *
     * @return array $typesMap
     */
    public static function getTypesMap()
    {
        return self::$_typesMap;
    }
    
}

