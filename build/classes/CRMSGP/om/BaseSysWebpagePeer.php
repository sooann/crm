<?php


/**
 * Base static class for performing query and update operations on the 'SYS_Webpage' table.
 *
 *
 *
 * @package propel.generator.CRMSGP.om
 */
abstract class BaseSysWebpagePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'CRMSGP';

    /** the table name for this class */
    const TABLE_NAME = 'SYS_Webpage';

    /** the related Propel class for this table */
    const OM_CLASS = 'SysWebpage';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SysWebpageTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the WEBPAGE_ID field */
    const WEBPAGE_ID = 'SYS_Webpage.WEBPAGE_ID';

    /** the column name for the WEBTEMPLATE_ID field */
    const WEBTEMPLATE_ID = 'SYS_Webpage.WEBTEMPLATE_ID';

    /** the column name for the STRLOCATION field */
    const STRLOCATION = 'SYS_Webpage.STRLOCATION';

    /** the column name for the STRNAME field */
    const STRNAME = 'SYS_Webpage.STRNAME';

    /** the column name for the STRDESCRIPTION field */
    const STRDESCRIPTION = 'SYS_Webpage.STRDESCRIPTION';

    /** the column name for the STRACTION field */
    const STRACTION = 'SYS_Webpage.STRACTION';

    /** the column name for the STRREQUIREDPARAMETERS field */
    const STRREQUIREDPARAMETERS = 'SYS_Webpage.STRREQUIREDPARAMETERS';

    /** the column name for the STRWEBPAGEFACTORY field */
    const STRWEBPAGEFACTORY = 'SYS_Webpage.STRWEBPAGEFACTORY';

    /** the column name for the STRHTML field */
    const STRHTML = 'SYS_Webpage.STRHTML';

    /** the column name for the CLONEFISHPARENTID field */
    const CLONEFISHPARENTID = 'SYS_Webpage.CLONEFISHPARENTID';

    /** the column name for the STRCLONEFISHCONFIG field */
    const STRCLONEFISHCONFIG = 'SYS_Webpage.STRCLONEFISHCONFIG';

    /** the column name for the STRORMCLASS field */
    const STRORMCLASS = 'SYS_Webpage.STRORMCLASS';

    /** the column name for the STRSUCCREDIRECT field */
    const STRSUCCREDIRECT = 'SYS_Webpage.STRSUCCREDIRECT';

    /** the column name for the BLNACTIVE field */
    const BLNACTIVE = 'SYS_Webpage.BLNACTIVE';

    /** the column name for the DBVERSIONID field */
    const DBVERSIONID = 'SYS_Webpage.DBVERSIONID';

    /** the column name for the INTCREATEDBY field */
    const INTCREATEDBY = 'SYS_Webpage.INTCREATEDBY';

    /** the column name for the INTMODIFIEDBY field */
    const INTMODIFIEDBY = 'SYS_Webpage.INTMODIFIEDBY';

    /** the column name for the DTCREATEDDATE field */
    const DTCREATEDDATE = 'SYS_Webpage.DTCREATEDDATE';

    /** the column name for the DTMODIFIEDDATE field */
    const DTMODIFIEDDATE = 'SYS_Webpage.DTMODIFIEDDATE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of SysWebpage objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SysWebpage[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SysWebpagePeer::$fieldNames[SysWebpagePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('WebpageId', 'WebtemplateId', 'Location', 'Name', 'Description', 'Action', 'Requiredparameters', 'Webpagefactory', 'Html', 'Clonefishparentid', 'Clonefishconfig', 'Ormclass', 'Succredirect', 'Active', 'Dbversionid', 'Createdby', 'Modifiedby', 'Createddate', 'Modifieddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('webpageId', 'webtemplateId', 'location', 'name', 'description', 'action', 'requiredparameters', 'webpagefactory', 'html', 'clonefishparentid', 'clonefishconfig', 'ormclass', 'succredirect', 'active', 'dbversionid', 'createdby', 'modifiedby', 'createddate', 'modifieddate', ),
        BasePeer::TYPE_COLNAME => array (SysWebpagePeer::WEBPAGE_ID, SysWebpagePeer::WEBTEMPLATE_ID, SysWebpagePeer::STRLOCATION, SysWebpagePeer::STRNAME, SysWebpagePeer::STRDESCRIPTION, SysWebpagePeer::STRACTION, SysWebpagePeer::STRREQUIREDPARAMETERS, SysWebpagePeer::STRWEBPAGEFACTORY, SysWebpagePeer::STRHTML, SysWebpagePeer::CLONEFISHPARENTID, SysWebpagePeer::STRCLONEFISHCONFIG, SysWebpagePeer::STRORMCLASS, SysWebpagePeer::STRSUCCREDIRECT, SysWebpagePeer::BLNACTIVE, SysWebpagePeer::DBVERSIONID, SysWebpagePeer::INTCREATEDBY, SysWebpagePeer::INTMODIFIEDBY, SysWebpagePeer::DTCREATEDDATE, SysWebpagePeer::DTMODIFIEDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('WEBPAGE_ID', 'WEBTEMPLATE_ID', 'STRLOCATION', 'STRNAME', 'STRDESCRIPTION', 'STRACTION', 'STRREQUIREDPARAMETERS', 'STRWEBPAGEFACTORY', 'STRHTML', 'CLONEFISHPARENTID', 'STRCLONEFISHCONFIG', 'STRORMCLASS', 'STRSUCCREDIRECT', 'BLNACTIVE', 'DBVERSIONID', 'INTCREATEDBY', 'INTMODIFIEDBY', 'DTCREATEDDATE', 'DTMODIFIEDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('webpage_id', 'webtemplate_id', 'strLocation', 'strName', 'strDescription', 'strAction', 'strRequiredParameters', 'strWebpageFactory', 'strHtml', 'ClonefishparentID', 'strClonefishConfig', 'strORMClass', 'strSuccRedirect', 'blnActive', 'DBVersionID', 'intCreatedBy', 'intModifiedBy', 'dtCreatedDate', 'dtModifiedDate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SysWebpagePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('WebpageId' => 0, 'WebtemplateId' => 1, 'Location' => 2, 'Name' => 3, 'Description' => 4, 'Action' => 5, 'Requiredparameters' => 6, 'Webpagefactory' => 7, 'Html' => 8, 'Clonefishparentid' => 9, 'Clonefishconfig' => 10, 'Ormclass' => 11, 'Succredirect' => 12, 'Active' => 13, 'Dbversionid' => 14, 'Createdby' => 15, 'Modifiedby' => 16, 'Createddate' => 17, 'Modifieddate' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('webpageId' => 0, 'webtemplateId' => 1, 'location' => 2, 'name' => 3, 'description' => 4, 'action' => 5, 'requiredparameters' => 6, 'webpagefactory' => 7, 'html' => 8, 'clonefishparentid' => 9, 'clonefishconfig' => 10, 'ormclass' => 11, 'succredirect' => 12, 'active' => 13, 'dbversionid' => 14, 'createdby' => 15, 'modifiedby' => 16, 'createddate' => 17, 'modifieddate' => 18, ),
        BasePeer::TYPE_COLNAME => array (SysWebpagePeer::WEBPAGE_ID => 0, SysWebpagePeer::WEBTEMPLATE_ID => 1, SysWebpagePeer::STRLOCATION => 2, SysWebpagePeer::STRNAME => 3, SysWebpagePeer::STRDESCRIPTION => 4, SysWebpagePeer::STRACTION => 5, SysWebpagePeer::STRREQUIREDPARAMETERS => 6, SysWebpagePeer::STRWEBPAGEFACTORY => 7, SysWebpagePeer::STRHTML => 8, SysWebpagePeer::CLONEFISHPARENTID => 9, SysWebpagePeer::STRCLONEFISHCONFIG => 10, SysWebpagePeer::STRORMCLASS => 11, SysWebpagePeer::STRSUCCREDIRECT => 12, SysWebpagePeer::BLNACTIVE => 13, SysWebpagePeer::DBVERSIONID => 14, SysWebpagePeer::INTCREATEDBY => 15, SysWebpagePeer::INTMODIFIEDBY => 16, SysWebpagePeer::DTCREATEDDATE => 17, SysWebpagePeer::DTMODIFIEDDATE => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('WEBPAGE_ID' => 0, 'WEBTEMPLATE_ID' => 1, 'STRLOCATION' => 2, 'STRNAME' => 3, 'STRDESCRIPTION' => 4, 'STRACTION' => 5, 'STRREQUIREDPARAMETERS' => 6, 'STRWEBPAGEFACTORY' => 7, 'STRHTML' => 8, 'CLONEFISHPARENTID' => 9, 'STRCLONEFISHCONFIG' => 10, 'STRORMCLASS' => 11, 'STRSUCCREDIRECT' => 12, 'BLNACTIVE' => 13, 'DBVERSIONID' => 14, 'INTCREATEDBY' => 15, 'INTMODIFIEDBY' => 16, 'DTCREATEDDATE' => 17, 'DTMODIFIEDDATE' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('webpage_id' => 0, 'webtemplate_id' => 1, 'strLocation' => 2, 'strName' => 3, 'strDescription' => 4, 'strAction' => 5, 'strRequiredParameters' => 6, 'strWebpageFactory' => 7, 'strHtml' => 8, 'ClonefishparentID' => 9, 'strClonefishConfig' => 10, 'strORMClass' => 11, 'strSuccRedirect' => 12, 'blnActive' => 13, 'DBVersionID' => 14, 'intCreatedBy' => 15, 'intModifiedBy' => 16, 'dtCreatedDate' => 17, 'dtModifiedDate' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = SysWebpagePeer::getFieldNames($toType);
        $key = isset(SysWebpagePeer::$fieldKeys[$fromType][$name]) ? SysWebpagePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SysWebpagePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SysWebpagePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SysWebpagePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SysWebpagePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SysWebpagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SysWebpagePeer::WEBPAGE_ID);
            $criteria->addSelectColumn(SysWebpagePeer::WEBTEMPLATE_ID);
            $criteria->addSelectColumn(SysWebpagePeer::STRLOCATION);
            $criteria->addSelectColumn(SysWebpagePeer::STRNAME);
            $criteria->addSelectColumn(SysWebpagePeer::STRDESCRIPTION);
            $criteria->addSelectColumn(SysWebpagePeer::STRACTION);
            $criteria->addSelectColumn(SysWebpagePeer::STRREQUIREDPARAMETERS);
            $criteria->addSelectColumn(SysWebpagePeer::STRWEBPAGEFACTORY);
            $criteria->addSelectColumn(SysWebpagePeer::STRHTML);
            $criteria->addSelectColumn(SysWebpagePeer::CLONEFISHPARENTID);
            $criteria->addSelectColumn(SysWebpagePeer::STRCLONEFISHCONFIG);
            $criteria->addSelectColumn(SysWebpagePeer::STRORMCLASS);
            $criteria->addSelectColumn(SysWebpagePeer::STRSUCCREDIRECT);
            $criteria->addSelectColumn(SysWebpagePeer::BLNACTIVE);
            $criteria->addSelectColumn(SysWebpagePeer::DBVERSIONID);
            $criteria->addSelectColumn(SysWebpagePeer::INTCREATEDBY);
            $criteria->addSelectColumn(SysWebpagePeer::INTMODIFIEDBY);
            $criteria->addSelectColumn(SysWebpagePeer::DTCREATEDDATE);
            $criteria->addSelectColumn(SysWebpagePeer::DTMODIFIEDDATE);
        } else {
            $criteria->addSelectColumn($alias . '.WEBPAGE_ID');
            $criteria->addSelectColumn($alias . '.WEBTEMPLATE_ID');
            $criteria->addSelectColumn($alias . '.STRLOCATION');
            $criteria->addSelectColumn($alias . '.STRNAME');
            $criteria->addSelectColumn($alias . '.STRDESCRIPTION');
            $criteria->addSelectColumn($alias . '.STRACTION');
            $criteria->addSelectColumn($alias . '.STRREQUIREDPARAMETERS');
            $criteria->addSelectColumn($alias . '.STRWEBPAGEFACTORY');
            $criteria->addSelectColumn($alias . '.STRHTML');
            $criteria->addSelectColumn($alias . '.CLONEFISHPARENTID');
            $criteria->addSelectColumn($alias . '.STRCLONEFISHCONFIG');
            $criteria->addSelectColumn($alias . '.STRORMCLASS');
            $criteria->addSelectColumn($alias . '.STRSUCCREDIRECT');
            $criteria->addSelectColumn($alias . '.BLNACTIVE');
            $criteria->addSelectColumn($alias . '.DBVERSIONID');
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
        $criteria->setPrimaryTableName(SysWebpagePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SysWebpagePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SysWebpagePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SysWebpage
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SysWebpagePeer::doSelect($critcopy, $con);
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
        return SysWebpagePeer::populateObjects(SysWebpagePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SysWebpagePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SysWebpagePeer::DATABASE_NAME);

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
     * @param      SysWebpage $obj A SysWebpage object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getWebpageId();
            } // if key === null
            SysWebpagePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SysWebpage object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SysWebpage) {
                $key = (string) $value->getWebpageId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SysWebpage object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SysWebpagePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   SysWebpage Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SysWebpagePeer::$instances[$key])) {
                return SysWebpagePeer::$instances[$key];
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
        SysWebpagePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to SYS_Webpage
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
        $cls = SysWebpagePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SysWebpagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SysWebpagePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SysWebpagePeer::addInstanceToPool($obj, $key);
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
     * @return array (SysWebpage object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SysWebpagePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SysWebpagePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SysWebpagePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SysWebpagePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SysWebpagePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SysWebpagePeer::DATABASE_NAME)->getTable(SysWebpagePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSysWebpagePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSysWebpagePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new SysWebpageTableMap());
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
        return SysWebpagePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SysWebpage or Criteria object.
     *
     * @param      mixed $values Criteria or SysWebpage object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SysWebpage object
        }

        if ($criteria->containsKey(SysWebpagePeer::WEBPAGE_ID) && $criteria->keyContainsValue(SysWebpagePeer::WEBPAGE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SysWebpagePeer::WEBPAGE_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SysWebpagePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SysWebpage or Criteria object.
     *
     * @param      mixed $values Criteria or SysWebpage object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SysWebpagePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SysWebpagePeer::WEBPAGE_ID);
            $value = $criteria->remove(SysWebpagePeer::WEBPAGE_ID);
            if ($value) {
                $selectCriteria->add(SysWebpagePeer::WEBPAGE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SysWebpagePeer::TABLE_NAME);
            }

        } else { // $values is SysWebpage object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SysWebpagePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SYS_Webpage table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SysWebpagePeer::TABLE_NAME, $con, SysWebpagePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysWebpagePeer::clearInstancePool();
            SysWebpagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SysWebpage or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SysWebpage object or primary key or array of primary keys
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
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SysWebpagePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SysWebpage) { // it's a model object
            // invalidate the cache for this single object
            SysWebpagePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SysWebpagePeer::DATABASE_NAME);
            $criteria->add(SysWebpagePeer::WEBPAGE_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SysWebpagePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SysWebpagePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SysWebpagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SysWebpage object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      SysWebpage $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SysWebpagePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SysWebpagePeer::TABLE_NAME);

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

        return BasePeer::doValidate(SysWebpagePeer::DATABASE_NAME, SysWebpagePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SysWebpage
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SysWebpagePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SysWebpagePeer::DATABASE_NAME);
        $criteria->add(SysWebpagePeer::WEBPAGE_ID, $pk);

        $v = SysWebpagePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SysWebpage[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SysWebpagePeer::DATABASE_NAME);
            $criteria->add(SysWebpagePeer::WEBPAGE_ID, $pks, Criteria::IN);
            $objs = SysWebpagePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSysWebpagePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSysWebpagePeer::buildTableMap();

