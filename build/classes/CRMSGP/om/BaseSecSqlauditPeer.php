<?php


/**
 * Base static class for performing query and update operations on the 'SEC_SQLAudit' table.
 *
 *
 *
 * @package propel.generator.CRMSGP.om
 */
abstract class BaseSecSqlauditPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'CRMSGP';

    /** the table name for this class */
    const TABLE_NAME = 'SEC_SQLAudit';

    /** the related Propel class for this table */
    const OM_CLASS = 'SecSqlaudit';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SecSqlauditTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the SQLAUDIT_ID field */
    const SQLAUDIT_ID = 'SEC_SQLAudit.SQLAUDIT_ID';

    /** the column name for the STRSQLSTATEMENT field */
    const STRSQLSTATEMENT = 'SEC_SQLAudit.STRSQLSTATEMENT';

    /** the column name for the STRPARAMETERS field */
    const STRPARAMETERS = 'SEC_SQLAudit.STRPARAMETERS';

    /** the column name for the STRPAGEURL field */
    const STRPAGEURL = 'SEC_SQLAudit.STRPAGEURL';

    /** the column name for the INTRECORDID field */
    const INTRECORDID = 'SEC_SQLAudit.INTRECORDID';

    /** the column name for the INTVERSIONID field */
    const INTVERSIONID = 'SEC_SQLAudit.INTVERSIONID';

    /** the column name for the DTSTARTDATE field */
    const DTSTARTDATE = 'SEC_SQLAudit.DTSTARTDATE';

    /** the column name for the DTENDDATE field */
    const DTENDDATE = 'SEC_SQLAudit.DTENDDATE';

    /** the column name for the INTCREATEDBY field */
    const INTCREATEDBY = 'SEC_SQLAudit.INTCREATEDBY';

    /** the column name for the DTCREATEDDATE field */
    const DTCREATEDDATE = 'SEC_SQLAudit.DTCREATEDDATE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of SecSqlaudit objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SecSqlaudit[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SecSqlauditPeer::$fieldNames[SecSqlauditPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('SqlauditId', 'Sqlstatement', 'Parameters', 'Pageurl', 'Recordid', 'Versionid', 'Startdate', 'Enddate', 'Createdby', 'Createddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('sqlauditId', 'sqlstatement', 'parameters', 'pageurl', 'recordid', 'versionid', 'startdate', 'enddate', 'createdby', 'createddate', ),
        BasePeer::TYPE_COLNAME => array (SecSqlauditPeer::SQLAUDIT_ID, SecSqlauditPeer::STRSQLSTATEMENT, SecSqlauditPeer::STRPARAMETERS, SecSqlauditPeer::STRPAGEURL, SecSqlauditPeer::INTRECORDID, SecSqlauditPeer::INTVERSIONID, SecSqlauditPeer::DTSTARTDATE, SecSqlauditPeer::DTENDDATE, SecSqlauditPeer::INTCREATEDBY, SecSqlauditPeer::DTCREATEDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SQLAUDIT_ID', 'STRSQLSTATEMENT', 'STRPARAMETERS', 'STRPAGEURL', 'INTRECORDID', 'INTVERSIONID', 'DTSTARTDATE', 'DTENDDATE', 'INTCREATEDBY', 'DTCREATEDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('sqlaudit_id', 'strSQLStatement', 'strParameters', 'strPageURL', 'intRecordID', 'intVersionID', 'dtStartDate', 'dtEndDate', 'intCreatedBy', 'dtCreatedDate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SecSqlauditPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('SqlauditId' => 0, 'Sqlstatement' => 1, 'Parameters' => 2, 'Pageurl' => 3, 'Recordid' => 4, 'Versionid' => 5, 'Startdate' => 6, 'Enddate' => 7, 'Createdby' => 8, 'Createddate' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('sqlauditId' => 0, 'sqlstatement' => 1, 'parameters' => 2, 'pageurl' => 3, 'recordid' => 4, 'versionid' => 5, 'startdate' => 6, 'enddate' => 7, 'createdby' => 8, 'createddate' => 9, ),
        BasePeer::TYPE_COLNAME => array (SecSqlauditPeer::SQLAUDIT_ID => 0, SecSqlauditPeer::STRSQLSTATEMENT => 1, SecSqlauditPeer::STRPARAMETERS => 2, SecSqlauditPeer::STRPAGEURL => 3, SecSqlauditPeer::INTRECORDID => 4, SecSqlauditPeer::INTVERSIONID => 5, SecSqlauditPeer::DTSTARTDATE => 6, SecSqlauditPeer::DTENDDATE => 7, SecSqlauditPeer::INTCREATEDBY => 8, SecSqlauditPeer::DTCREATEDDATE => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SQLAUDIT_ID' => 0, 'STRSQLSTATEMENT' => 1, 'STRPARAMETERS' => 2, 'STRPAGEURL' => 3, 'INTRECORDID' => 4, 'INTVERSIONID' => 5, 'DTSTARTDATE' => 6, 'DTENDDATE' => 7, 'INTCREATEDBY' => 8, 'DTCREATEDDATE' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('sqlaudit_id' => 0, 'strSQLStatement' => 1, 'strParameters' => 2, 'strPageURL' => 3, 'intRecordID' => 4, 'intVersionID' => 5, 'dtStartDate' => 6, 'dtEndDate' => 7, 'intCreatedBy' => 8, 'dtCreatedDate' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = SecSqlauditPeer::getFieldNames($toType);
        $key = isset(SecSqlauditPeer::$fieldKeys[$fromType][$name]) ? SecSqlauditPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SecSqlauditPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SecSqlauditPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SecSqlauditPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SecSqlauditPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SecSqlauditPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SecSqlauditPeer::SQLAUDIT_ID);
            $criteria->addSelectColumn(SecSqlauditPeer::STRSQLSTATEMENT);
            $criteria->addSelectColumn(SecSqlauditPeer::STRPARAMETERS);
            $criteria->addSelectColumn(SecSqlauditPeer::STRPAGEURL);
            $criteria->addSelectColumn(SecSqlauditPeer::INTRECORDID);
            $criteria->addSelectColumn(SecSqlauditPeer::INTVERSIONID);
            $criteria->addSelectColumn(SecSqlauditPeer::DTSTARTDATE);
            $criteria->addSelectColumn(SecSqlauditPeer::DTENDDATE);
            $criteria->addSelectColumn(SecSqlauditPeer::INTCREATEDBY);
            $criteria->addSelectColumn(SecSqlauditPeer::DTCREATEDDATE);
        } else {
            $criteria->addSelectColumn($alias . '.SQLAUDIT_ID');
            $criteria->addSelectColumn($alias . '.STRSQLSTATEMENT');
            $criteria->addSelectColumn($alias . '.STRPARAMETERS');
            $criteria->addSelectColumn($alias . '.STRPAGEURL');
            $criteria->addSelectColumn($alias . '.INTRECORDID');
            $criteria->addSelectColumn($alias . '.INTVERSIONID');
            $criteria->addSelectColumn($alias . '.DTSTARTDATE');
            $criteria->addSelectColumn($alias . '.DTENDDATE');
            $criteria->addSelectColumn($alias . '.INTCREATEDBY');
            $criteria->addSelectColumn($alias . '.DTCREATEDDATE');
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
        $criteria->setPrimaryTableName(SecSqlauditPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SecSqlauditPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SecSqlauditPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SecSqlaudit
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SecSqlauditPeer::doSelect($critcopy, $con);
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
        return SecSqlauditPeer::populateObjects(SecSqlauditPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SecSqlauditPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SecSqlauditPeer::DATABASE_NAME);

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
     * @param      SecSqlaudit $obj A SecSqlaudit object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSqlauditId();
            } // if key === null
            SecSqlauditPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SecSqlaudit object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SecSqlaudit) {
                $key = (string) $value->getSqlauditId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SecSqlaudit object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SecSqlauditPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   SecSqlaudit Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SecSqlauditPeer::$instances[$key])) {
                return SecSqlauditPeer::$instances[$key];
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
        SecSqlauditPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to SEC_SQLAudit
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
        $cls = SecSqlauditPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SecSqlauditPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SecSqlauditPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SecSqlauditPeer::addInstanceToPool($obj, $key);
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
     * @return array (SecSqlaudit object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SecSqlauditPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SecSqlauditPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SecSqlauditPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SecSqlauditPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SecSqlauditPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SecSqlauditPeer::DATABASE_NAME)->getTable(SecSqlauditPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSecSqlauditPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSecSqlauditPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new SecSqlauditTableMap());
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
        return SecSqlauditPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SecSqlaudit or Criteria object.
     *
     * @param      mixed $values Criteria or SecSqlaudit object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SecSqlaudit object
        }

        if ($criteria->containsKey(SecSqlauditPeer::SQLAUDIT_ID) && $criteria->keyContainsValue(SecSqlauditPeer::SQLAUDIT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SecSqlauditPeer::SQLAUDIT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SecSqlauditPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SecSqlaudit or Criteria object.
     *
     * @param      mixed $values Criteria or SecSqlaudit object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SecSqlauditPeer::SQLAUDIT_ID);
            $value = $criteria->remove(SecSqlauditPeer::SQLAUDIT_ID);
            if ($value) {
                $selectCriteria->add(SecSqlauditPeer::SQLAUDIT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SecSqlauditPeer::TABLE_NAME);
            }

        } else { // $values is SecSqlaudit object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SecSqlauditPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SEC_SQLAudit table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SecSqlauditPeer::TABLE_NAME, $con, SecSqlauditPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SecSqlauditPeer::clearInstancePool();
            SecSqlauditPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SecSqlaudit or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SecSqlaudit object or primary key or array of primary keys
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
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SecSqlauditPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SecSqlaudit) { // it's a model object
            // invalidate the cache for this single object
            SecSqlauditPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);
            $criteria->add(SecSqlauditPeer::SQLAUDIT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SecSqlauditPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SecSqlauditPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SecSqlauditPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SecSqlaudit object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      SecSqlaudit $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SecSqlauditPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SecSqlauditPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SecSqlauditPeer::DATABASE_NAME, SecSqlauditPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SecSqlaudit
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SecSqlauditPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);
        $criteria->add(SecSqlauditPeer::SQLAUDIT_ID, $pk);

        $v = SecSqlauditPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SecSqlaudit[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);
            $criteria->add(SecSqlauditPeer::SQLAUDIT_ID, $pks, Criteria::IN);
            $objs = SecSqlauditPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSecSqlauditPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSecSqlauditPeer::buildTableMap();

