<?php

namespace DBmapper\Types;

abstract class Type
{
    const BOOLEAN = 'boolean';
    const DATETIME = 'datetime';
    const DATE = 'date';
    const TIME = 'time';
    const INTEGER = 'integer';
    const STRING = 'string';
    
    /** Map of already instantiated type objects. One instance per type (flyweight). */
    private static $_typeObjects = array();

    /** The map of supported doctrine mapping types. */
    private static $_typesMap = array(
        self::BOOLEAN => 'DBmapper\Types\BooleanType',
        self::INTEGER => 'DBmapper\Types\IntegerType',
        self::STRING => 'DBmapper\Types\StringType',
        self::DATETIME => 'DBmapper\Types\DateTimeType',
        self::DATE => 'DBmapper\Types\DateType',
        self::TIME => 'DBmapper\Types\TimeType',
    );

    /* Prevent instantiation and force use of the factory method. */
    final private function __construct() {}

    /**
     * Converts a value from its PHP representation to its database representation
     * of this type.
     *
     * @param mixed $value The value to convert.
     * @param AbstractPlatform $platform The currently used database platform.
     * @return mixed The database representation of the value.
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    /**
     * Converts a value from its database representation to its PHP representation
     * of this type.
     *
     * @param mixed $value The value to convert.
     * @param AbstractPlatform $platform The currently used database platform.
     * @return mixed The PHP representation of the value.
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    /**
     * Gets the default length of this type.
     *
     * @todo Needed?
     */
    public function getDefaultLength(AbstractPlatform $platform)
    {
        return null;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param array $fieldDeclaration The field declaration.
     * @param AbstractPlatform $platform The currently used database platform.
     */
    abstract public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform);

    /**
     * Gets the name of this type.
     *
     * @return string
     * @todo Needed?
     */
    abstract public function getName();

    /**
     * Factory method to create type instances.
     * Type instances are implemented as flyweights.
     *
     * @static
     * @throws DBALException
     * @param string $name The name of the type (as returned by getName()).
     * @return \Doctrine\DBAL\Types\Type
     */
    public static function getType($name)
    {
        if ( ! isset(self::$_typeObjects[$name])) {
            if ( ! isset(self::$_typesMap[$name])) {
                throw DBALException::unknownColumnType($name);
            }
            self::$_typeObjects[$name] = new self::$_typesMap[$name]();
        }

        return self::$_typeObjects[$name];
    }

    /**
     * Adds a custom type to the type map.
     *
     * @static
     * @param string $name Name of the type. This should correspond to what getName() returns.
     * @param string $className The class name of the custom type.
     * @throws DBALException
     */
    public static function addType($name, $className)
    {
        if (isset(self::$_typesMap[$name])) {
            throw DBALException::typeExists($name);
        }

        self::$_typesMap[$name] = $className;
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

    public function __toString()
    {
        $e = explode('\\', get_class($this));
        return str_replace('Type', '', end($e));
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a database value.
     *
     * @param string $sqlExpr
     * @param AbstractPlatform $platform
     * @return string
     */
    public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform)
    {
        return $sqlExpr;
    }

    /**
     * Modifies the SQL expression (identifier, parameter) to convert to a PHP value.
     *
     * @param string $sqlExpr
     * @param AbstractPlatform $platform
     * @return string
     */
    public function convertToPHPValueSQL($sqlExpr, $platform)
    {
        return $sqlExpr;
    }

}

