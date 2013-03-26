<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper\Types;

abstract class DBInterfaceType {
    
    const BOOLEAN = 'boolean';
    const DATETIME = 'datetime';
    const DATE = 'date';
    const TIME = 'time';
    const INTEGER = 'integer';
    const STRING = 'string';
    
    /** The map of supported doctrine mapping types. */
    private static $_typesMap = array(
        self::BOOLEAN => 'DBmapper\Types\BooleanType',
        self::INTEGER => 'DBmapper\Types\IntegerType',
        self::STRING => 'DBmapper\Types\StringType',
        self::DATETIME => 'DBmapper\Types\DateTimeType',
        self::DATE => 'DBmapper\Types\DateType',
        self::TIME => 'DBmapper\Types\TimeType',
    );
}
?>
