<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper;

class DBmapperException extends \Exception {
    
    //common DBmapper exception
    public static function tableNotFound () {
        return new self ("Table not Specified.");
    }
    
    public static function DBmapperTableNotFound () {
        return new self ("DBmapper tables not found. Please check with administrator.");
    }
    
    //platform exceptions
    public static function unknownPlatformType ($platform) {
        return new self ("Unknown Data Layer Platform: $platform");
    }

    public static function PlatformTypeNotFound () {
        return new self ("Platform Type Undefined. Please check with administrator.");
    }

    public static function invalidPlatformClass ($platform, $platformclass) {
        return new self ("Invalid platform class $platform ($platformclass). Please check with admninistrator.");
    }
    
    //DBmapper Type Exception
    public static function unknownColumnType($name)
    {
        return new self('Unknown column type "'.$name.'" requested. Unable to find DBmapper type class file');
    }
    
    public static function invalidColumnTypeClass($wrapperClass)
    {
        return new self("The given 'wrapperClass' ".$wrapperClass." has to be a ".
            "subtype of Types\AbstractType");
    }
    
}

?>
