<?php


/**
 * Base static class for performing query and update operations on the 'SYS_FrmElement' table.
 *
 *
 *
 * @package propel.generator.CRMSGP.om
 */
abstract class BaseSysFrmelementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'CRMSGP';

    /** the table name for this class */
    const TABLE_NAME = 'SYS_FrmElement';

    /** the related Propel class for this table */
    const OM_CLASS = 'SysFrmelement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SysFrmelementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the FRMELEMENT_ID field */
    const FRMELEMENT_ID = 'SYS_FrmElement.FRMELEMENT_ID';

    /** the column name for the STRNAME field */
    const STRNAME = 'SYS_FrmElement.STRNAME';

    /** the column name for the STRCLASSNAME field */
    const STRCLASSNAME = 'SYS_FrmElement.STRCLASSNAME';

    /** the column name for the STREXTENDS field */
    const STREXTENDS = 'SYS_FrmElement.STREXTENDS';

    /** the column name for the STRINCLUDES field */
    const STRINCLUDES = 'SYS_FrmElement.STRINCLUDES';

    /** the column name for the STRVARIABLES field */
    const STRVARIABLES = 'SYS_FrmElement.STRVARIABLES';

    /** the column name for the STRCONSTRUCTOR field */
    const STRCONSTRUCTOR = 'SYS_FrmElement.STRCONSTRUCTOR';

    /** the column name for the STRCONSTRUCTORARGS field */
    const STRCONSTRUCTORARGS = 'SYS_FrmElement.STRCONSTRUCTORARGS';

    /** the column name for the STRGETHTML field */
    const STRGETHTML = 'SYS_FrmElement.STRGETHTML';

    /** the column name for the STRGETHTMLROW field */
    const STRGETHTMLROW = 'SYS_FrmElement.STRGETHTMLROW';

    /** the column name for the STRGETVALUE field */
    const STRGETVALUE = 'SYS_FrmElement.STRGETVALUE';

    /** the column name for the STRSETVALUE field */
    const STRSETVALUE = 'SYS_FrmElement.STRSETVALUE';

    /** the column name for the STRGETSCRIPTS field */
    const STRGETSCRIPTS = 'SYS_FrmElement.STRGETSCRIPTS';

    /** the column name for the STROTHERCODE field */
    const STROTHERCODE = 'SYS_FrmElement.STROTHERCODE';

    /** the column name for the DBVERSIONID field */
    const DBVERSIONID = 'SYS_FrmElement.DBVERSIONID';

    /** the column name for the BLNACTIVE field */
    const BLNACTIVE = 'SYS_FrmElement.BLNACTIVE';

    /** the column name for the INTCREATEDBY field */
    const INTCREATEDBY = 'SYS_FrmElement.INTCREATEDBY';

    /** the column name for the INTMODIFIEDBY field */
    const INTMODIFIEDBY = 'SYS_FrmElement.INTMODIFIEDBY';

    /** the column name for the DTCREATEDDATE field */
    const DTCREATEDDATE = 'SYS_FrmElement.DTCREATEDDATE';

    /** the column name for the DTMODIFIEDDATE field */
    const DTMODIFIEDDATE = 'SYS_FrmElement.DTMODIFIEDDATE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of SysFrmelement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SysFrmelement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SysFrmelementPeer::$fieldNames[SysFrmelementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('FrmelementId', 'Name', 'Classname', 'Extends', 'Includes', 'Variables', 'Constructor', 'Constructorargs', 'Gethtml', 'Gethtmlrow', 'Getvalue', 'Setvalue', 'Getscripts', 'Othercode', 'Dbversionid', 'Active', 'Createdby', 'Modifiedby', 'Createddate', 'Modifieddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('frmelementId', 'name', 'classname', 'extends', 'includes', 'variables', 'constructor', 'constructorargs', 'gethtml', 'gethtmlrow', 'getvalue', 'setvalue', 'getscripts', 'othercode', 'dbversionid', 'active', 'createdby', 'modifiedby', 'createddate', 'modifieddate', ),
        BasePeer::TYPE_COLNAME => array (SysFrmelementPeer::FRMELEMENT_ID, SysFrmelementPeer::STRNAME, SysFrmelementPeer::STRCLASSNAME, SysFrmelementPeer::STREXTENDS, SysFrmelementPeer::STRINCLUDES, SysFrmelementPeer::STRVARIABLES, SysFrmelementPeer::STRCONSTRUCTOR, SysFrmelementPeer::STRCONSTRUCTORARGS, SysFrmelementPeer::STRGETHTML, SysFrmelementPeer::STRGETHTMLROW, SysFrmelementPeer::STRGETVALUE, SysFrmelementPeer::STRSETVALUE, SysFrmelementPeer::STRGETSCRIPTS, SysFrmelementPeer::STROTHERCODE, SysFrmelementPeer::DBVERSIONID, SysFrmelementPeer::BLNACTIVE, SysFrmelementPeer::INTCREATEDBY, SysFrmelementPeer::INTMODIFIEDBY, SysFrmelementPeer::DTCREATEDDATE, SysFrmelementPeer::DTMODIFIEDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FRMELEMENT_ID', 'STRNAME', 'STRCLASSNAME', 'STREXTENDS', 'STRINCLUDES', 'STRVARIABLES', 'STRCONSTRUCTOR', 'STRCONSTRUCTORARGS', 'STRGETHTML', 'STRGETHTMLROW', 'STRGETVALUE', 'STRSETVALUE', 'STRGETSCRIPTS', 'STROTHERCODE', 'DBVERSIONID', 'BLNACTIVE', 'INTCREATEDBY', 'INTMODIFIEDBY', 'DTCREATEDDATE', 'DTMODIFIEDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('frmelement_id', 'strName', 'strClassName', 'strExtends', 'strIncludes', 'strVariables', 'strConstructor', 'strConstructorArgs', 'strGetHTML', 'strGetHTMLRow', 'strGetValue', 'strSetValue', 'strGetScripts', 'strOtherCode', 'DBVersionID', 'blnActive', 'intCreatedBy', 'intModifiedBy', 'dtCreatedDate', 'dtModifiedDate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SysFrmelementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('FrmelementId' => 0, 'Name' => 1, 'Classname' => 2, 'Extends' => 3, 'Includes' => 4, 'Variables' => 5, 'Constructor' => 6, 'Constructorargs' => 7, 'Gethtml' => 8, 'Gethtmlrow' => 9, 'Getvalue' => 10, 'Setvalue' => 11, 'Getscripts' => 12, 'Othercode' => 13, 'Dbversionid' => 14, 'Active' => 15, 'Createdby' => 16, 'Modifiedby' => 17, 'Createddate' => 18, 'Modifieddate' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('frmelementId' => 0, 'name' => 1, 'classname' => 2, 'extends' => 3, 'includes' => 4, 'variables' => 5, 'constructor' => 6, 'constructorargs' => 7, 'gethtml' => 8, 'gethtmlrow' => 9, 'getvalue' => 10, 'setvalue' => 11, 'getscripts' => 12, 'othercode' => 13, 'dbversionid' => 14, 'active' => 15, 'createdby' => 16, 'modifiedby' => 17, 'createddate' => 18, 'modifieddate' => 19, ),
        BasePeer::TYPE_COLNAME => array (SysFrmelementPeer::FRMELEMENT_ID => 0, SysFrmelementPeer::STRNAME => 1, SysFrmelementPeer::STRCLASSNAME => 2, SysFrmelementPeer::STREXTENDS => 3, SysFrmelementPeer::STRINCLUDES => 4, SysFrmelementPeer::STRVARIABLES => 5, SysFrmelementPeer::STRCONSTRUCTOR => 6, SysFrmelementPeer::STRCONSTRUCTORARGS => 7, SysFrmelementPeer::STRGETHTML => 8, SysFrmelementPeer::STRGETHTMLROW => 9, SysFrmelementPeer::STRGETVALUE => 10, SysFrmelementPeer::STRSETVALUE => 11, SysFrmelementPeer::STRGETSCRIPTS => 12, SysFrmelementPeer::STROTHERCODE => 13, SysFrmelementPeer::DBVERSIONID => 14, SysFrmelementPeer::BLNACTIVE => 15, SysFrmelementPeer::INTCREATEDBY => 16, SysFrmelementPeer::INTMODIFIEDBY => 17, SysFrmelementPeer::DTCREATEDDATE => 18, SysFrmelementPeer::DTMODIFIEDDATE => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FRMELEMENT_ID' => 0, 'STRNAME' => 1, 'STRCLASSNAME' => 2, 'STREXTENDS' => 3, 'STRINCLUDES' => 4, 'STRVARIABLES' => 5, 'STRCONSTRUCTOR' => 6, 'STRCONSTRUCTORARGS' => 7, 'STRGETHTML' => 8, 'STRGETHTMLROW' => 9, 'STRGETVALUE' => 10, 'STRSETVALUE' => 11, 'STRGETSCRIPTS' => 12, 'STROTHERCODE' => 13, 'DBVERSIONID' => 14, 'BLNACTIVE' => 15, 'INTCREATEDBY' => 16, 'INTMODIFIEDBY' => 17, 'DTCREATEDDATE' => 18, 'DTMODIFIEDDATE' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('frmelement_id' => 0, 'strName' => 1, 'strClassName' => 2, 'strExtends' => 3, 'strIncludes' => 4, 'strVariables' => 5, 'strConstructor' => 6, 'strConstructorArgs' => 7, 'strGetHTML' => 8, 'strGetHTMLRow' => 9, 'strGetValue' => 10, 'strSetValue' => 11, 'strGetScripts' => 12, 'strOtherCode' => 13, 'DBVersionID' => 14, 'blnActive' => 15, 'intCreatedBy' => 16, 'intModifiedBy' => 17, 'dtCreatedDate' => 18, 'dtModifiedDate' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = SysFrmelementPeer::getFieldNames($toType);
        $key = isset(SysFrmelementPeer::$fieldKeys[$fromType][$name]) ? SysFrmelementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SysFrmelementPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, SysFrmelementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SysFrmelementPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. SysFrmelementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SysFrmelementPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SysFrmelementPeer::FRMELEMENT_ID);
            $criteria->addSelectColumn(SysFrmelementPeer::STRNAME);
            $criteria->addSelectColumn(SysFrmelementPeer::STRCLASSNAME);
            $criteria->addSelectColumn(SysFrmelementPeer::STREXTENDS);
            $criteria->addSelectColumn(SysFrmelementPeer::STRINCLUDES);
            $criteria->addSelectColumn(SysFrmelementPeer::STRVARIABLES);
            $criteria->addSelectColumn(SysFrmelementPeer::STRCONSTRUCTOR);
            $criteria->addSelectColumn(SysFrmelementPeer::STRCONSTRUCTORARGS);
            $criteria->addSelectColumn(SysFrmelementPeer::STRGETHTML);
            $criteria->addSelectColumn(SysFrmelementPeer::STRGETHTMLROW);
            $criteria->addSelectColumn(SysFrmelementPeer::STRGETVALUE);
            $criteria->addSelectColumn(SysFrmelementPeer::STRSETVALUE);
            $criteria->addSelectColumn(SysFrmelementPeer::STRGETSCRIPTS);
            $criteria->addSelectColumn(SysFrmelementPeer::STROTHERCODE);
            $criteria->addSelectColumn(SysFrmelementPeer::DBVERSIONID);
            $criteria->addSelectColumn(SysFrmelementPeer::BLNACTIVE);
            $criteria->addSelectColumn(SysFrmelementPeer::INTCREATEDBY);
            $criteria->addSelectColumn(SysFrmelementPeer::INTMODIFIEDBY);
            $criteria->addSelectColumn(SysFrmelementPeer::DTCREATEDDATE);
            $criteria->addSelectColumn(SysFrmelementPeer::DTMODIFIEDDATE);
        } else {
            $criteria->addSelectColumn($alias . '.FRMELEMENT_ID');
            $criteria->addSelectColumn($alias . '.STRNAME');
            $criteria->addSelectColumn($alias . '.STRCLASSNAME');
            $criteria->addSelectColumn($alias . '.STREXTENDS');
            $criteria->addSelectColumn($alias . '.STRINCLUDES');
            $criteria->addSelectColumn($alias . '.STRVARIABLES');
            $criteria->addSelectColumn($alias . '.STRCONSTRUCTOR');
            $criteria->addSelectColumn($alias . '.STRCONSTRUCTORARGS');
            $criteria->addSelectColumn($alias . '.STRGETHTML');
            $criteria->addSelectColumn($alias . '.STRGETHTMLROW');
            $criteria->addSelectColumn($alias . '.STRGETVALUE');
            $criteria->addSelectColumn($alias . '.STRSETVALUE');
            $criteria->addSelectColumn($alias . '.STRGETSCRIPTS');
            $criteria->addSelectColumn($alias . '.STROTHERCODE');
            $criteria->addSelectColumn($alias . '.DBVERSIONID');
            $criteria->addSelectColumn($alias . '.BLNACTIVE');
            $criteria->addSelectColumn($alias . '.INTCREATEDBY');
            $criteria->addSelectColumn($alias . '.INTMODIFIEDBY');
            $criteria->addSelectColumn($alias . '.DTCREATEDDATE');
            $criteria->addSelectColumn($alias . '.DTMODIFIEDDATE');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SysFrmelementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SysFrmelementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SysFrmelementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 SysFrmelement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SysFrmelementPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return SysFrmelementPeer::populateObjects(SysFrmelementPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SysFrmelementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SysFrmelementPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      SysFrmelement $obj A SysFrmelement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFrmelementId();
            } // if key === null
            SysFrmelementPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A SysFrmelement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SysFrmelement) {
                $key = (string) $value->getFrmelementId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SysFrmelement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SysFrmelementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   SysFrmelement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SysFrmelementPeer::$instances[$key])) {
                return SysFrmelementPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        SysFrmelementPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to SYS_FrmElement
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (string) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = SysFrmelementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SysFrmelementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SysFrmelementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SysFrmelementPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (SysFrmelement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SysFrmelementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SysFrmelementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SysFrmelementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SysFrmelementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SysFrmelementPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(SysFrmelementPeer::DATABASE_NAME)->getTable(SysFrmelementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSysFrmelementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSysFrmelementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new SysFrmelementTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return SysFrmelementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SysFrmelement or Criteria object.
     *
     * @param      mixed $values Criteria or SysFrmelement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SysFrmelement object
        }

        if ($criteria->containsKey(SysFrmelementPeer::FRMELEMENT_ID) && $criteria->keyContainsValue(SysFrmelementPeer::FRMELEMENT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SysFrmelementPeer::FRMELEMENT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SysFrmelementPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a SysFrmelement or Criteria object.
     *
     * @param      mixed $values Criteria or SysFrmelement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SysFrmelementPeer::FRMELEMENT_ID);
            $value = $criteria->remove(SysFrmelementPeer::FRMELEMENT_ID);
            if ($value) {
                $selectCriteria->add(SysFrmelementPeer::FRMELEMENT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SysFrmelementPeer::TABLE_NAME);
            }

        } else { // $values is SysFrmelement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SysFrmelementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SYS_FrmElement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SysFrmelementPeer::TABLE_NAME, $con, SysFrmelementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysFrmelementPeer::clearInstancePool();
            SysFrmelementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SysFrmelement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SysFrmelement object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SysFrmelementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SysFrmelement) { // it's a model object
            // invalidate the cache for this single object
            SysFrmelementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);
            $criteria->add(SysFrmelementPeer::FRMELEMENT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SysFrmelementPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SysFrmelementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SysFrmelementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SysFrmelement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      SysFrmelement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SysFrmelementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SysFrmelementPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(SysFrmelementPeer::DATABASE_NAME, SysFrmelementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SysFrmelement
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SysFrmelementPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);
        $criteria->add(SysFrmelementPeer::FRMELEMENT_ID, $pk);

        $v = SysFrmelementPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SysFrmelement[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);
            $criteria->add(SysFrmelementPeer::FRMELEMENT_ID, $pks, Criteria::IN);
            $objs = SysFrmelementPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSysFrmelementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSysFrmelementPeer::buildTableMap();

