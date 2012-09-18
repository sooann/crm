<?php


/**
 * Base class that represents a row from the 'SYS_SQLQuery' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysSqlquery extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysSqlqueryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysSqlqueryPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sqlquery_id field.
     * @var        string
     */
    protected $sqlquery_id;

    /**
     * The value for the strstatement field.
     * @var        string
     */
    protected $strstatement;

    /**
     * The value for the strname field.
     * @var        string
     */
    protected $strname;

    /**
     * The value for the strdescription field.
     * @var        string
     */
    protected $strdescription;

    /**
     * The value for the strprimaryfield field.
     * @var        string
     */
    protected $strprimaryfield;

    /**
     * The value for the dbversionid field.
     * @var        string
     */
    protected $dbversionid;

    /**
     * The value for the blnactive field.
     * @var        int
     */
    protected $blnactive;

    /**
     * The value for the intcreatedby field.
     * @var        string
     */
    protected $intcreatedby;

    /**
     * The value for the intmodifiedby field.
     * @var        string
     */
    protected $intmodifiedby;

    /**
     * The value for the dtcreateddate field.
     * @var        string
     */
    protected $dtcreateddate;

    /**
     * The value for the dtmodifieddate field.
     * @var        string
     */
    protected $dtmodifieddate;

    /**
     * @var        PropelObjectCollection|SysWebpage[] Collection to store aggregation of SysWebpage objects.
     */
    protected $collSysWebpages;
    protected $collSysWebpagesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sysWebpagesScheduledForDeletion = null;

    /**
     * Get the [sqlquery_id] column value.
     *
     * @return string
     */
    public function getSqlqueryId()
    {
        return $this->sqlquery_id;
    }

    /**
     * Get the [strstatement] column value.
     *
     * @return string
     */
    public function getStatement()
    {
        return $this->strstatement;
    }

    /**
     * Get the [strname] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->strname;
    }

    /**
     * Get the [strdescription] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->strdescription;
    }

    /**
     * Get the [strprimaryfield] column value.
     *
     * @return string
     */
    public function getPrimaryfield()
    {
        return $this->strprimaryfield;
    }

    /**
     * Get the [dbversionid] column value.
     *
     * @return string
     */
    public function getDbversionid()
    {
        return $this->dbversionid;
    }

    /**
     * Get the [blnactive] column value.
     *
     * @return int
     */
    public function getActive()
    {
        return $this->blnactive;
    }

    /**
     * Get the [intcreatedby] column value.
     *
     * @return string
     */
    public function getCreatedby()
    {
        return $this->intcreatedby;
    }

    /**
     * Get the [intmodifiedby] column value.
     *
     * @return string
     */
    public function getModifiedby()
    {
        return $this->intmodifiedby;
    }

    /**
     * Get the [optionally formatted] temporal [dtcreateddate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateddate($format = 'Y-m-d H:i:s')
    {
        if ($this->dtcreateddate === null) {
            return null;
        }

        if ($this->dtcreateddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->dtcreateddate);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dtcreateddate, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [dtmodifieddate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModifieddate($format = 'Y-m-d H:i:s')
    {
        if ($this->dtmodifieddate === null) {
            return null;
        }

        if ($this->dtmodifieddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->dtmodifieddate);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dtmodifieddate, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Set the value of [sqlquery_id] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setSqlqueryId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sqlquery_id !== $v) {
            $this->sqlquery_id = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::SQLQUERY_ID;
        }


        return $this;
    } // setSqlqueryId()

    /**
     * Set the value of [strstatement] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setStatement($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strstatement !== $v) {
            $this->strstatement = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::STRSTATEMENT;
        }


        return $this;
    } // setStatement()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [strdescription] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strdescription !== $v) {
            $this->strdescription = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::STRDESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [strprimaryfield] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setPrimaryfield($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strprimaryfield !== $v) {
            $this->strprimaryfield = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::STRPRIMARYFIELD;
        }


        return $this;
    } // setPrimaryfield()

    /**
     * Set the value of [dbversionid] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setDbversionid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dbversionid !== $v) {
            $this->dbversionid = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::DBVERSIONID;
        }


        return $this;
    } // setDbversionid()

    /**
     * Set the value of [blnactive] column.
     *
     * @param int $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnactive !== $v) {
            $this->blnactive = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::BLNACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Set the value of [intmodifiedby] column.
     *
     * @param string $v new value
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setModifiedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intmodifiedby !== $v) {
            $this->intmodifiedby = $v;
            $this->modifiedColumns[] = SysSqlqueryPeer::INTMODIFIEDBY;
        }


        return $this;
    } // setModifiedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysSqlqueryPeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Sets the value of [dtmodifieddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function setModifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtmodifieddate !== null && $tmpDt = new DateTime($this->dtmodifieddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SysSqlqueryPeer::DTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setModifieddate()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->sqlquery_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->strstatement = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strdescription = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strprimaryfield = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->dbversionid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->blnactive = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->intcreatedby = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->intmodifiedby = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->dtcreateddate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->dtmodifieddate = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = SysSqlqueryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysSqlquery object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SysSqlqueryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysSqlqueryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSysWebpages = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SysSqlqueryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysSqlqueryQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SysSqlqueryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysSqlqueryPeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
                if (!$this->isColumnModified(SysSqlqueryPeer::DTMODIFIEDDATE)) {
                    $this->setModifieddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setModifiedby($_SESSION['intUserURN']);
                    }
                }
                // dbversion behavior
                $this->setDbversionid(1);
                // insertactive behavior
                $this->setActive(1);
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SysSqlqueryPeer::DTMODIFIEDDATE)) {
                    $this->setModifieddate(time());
                    $this->setModifiedby($_SESSION['intUserURN']);
                }
                // dbversion behavior
                if ($this->isModified()) {
                                $this->setDbversionid($this->getDefaultDBVersionid()+1);
                            }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // sqlaudit behavior

                if (class_exists('SecSqlaudit', true)==true) {
                    if (get_class($this)!='SecSqlaudit') {
                        $SqlAudit = new SecSqlaudit();
                        $SqlAudit->setSqlstatement($con->getLastExecutedQuery());
                        $SqlAudit->setPageurl($_SERVER['REQUEST_URI']);
                        $SqlAudit->setRecordid($this->getPrimaryKey());
                        if (method_exists($this, 'getDefaultDBVersionid')) {
                            $SqlAudit->setVersionid($this->getDefaultDBVersionid());
                        }
                        $SqlAudit->setStartdate($con->getStartTimeLastExecutedQuery());
                        $SqlAudit->setEnddate($con->getEndTimeLastExecutedQuery());
                        $SqlAudit->save();
                    }
                }

                SysSqlqueryPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->sysWebpagesScheduledForDeletion !== null) {
                if (!$this->sysWebpagesScheduledForDeletion->isEmpty()) {
                    foreach ($this->sysWebpagesScheduledForDeletion as $sysWebpage) {
                        // need to save related object because we set the relation to null
                        $sysWebpage->save($con);
                    }
                    $this->sysWebpagesScheduledForDeletion = null;
                }
            }

            if ($this->collSysWebpages !== null) {
                foreach ($this->collSysWebpages as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = SysSqlqueryPeer::SQLQUERY_ID;
        if (null !== $this->sqlquery_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysSqlqueryPeer::SQLQUERY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysSqlqueryPeer::SQLQUERY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SQLQUERY_ID`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::STRSTATEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`STRSTATEMENT`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::STRDESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`STRDESCRIPTION`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::STRPRIMARYFIELD)) {
            $modifiedColumns[':p' . $index++]  = '`STRPRIMARYFIELD`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::DBVERSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`DBVERSIONID`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::BLNACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`BLNACTIVE`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::INTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTMODIFIEDBY`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }
        if ($this->isColumnModified(SysSqlqueryPeer::DTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTMODIFIEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_SQLQuery` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SQLQUERY_ID`':
                        $stmt->bindValue($identifier, $this->sqlquery_id, PDO::PARAM_INT);
                        break;
                    case '`STRSTATEMENT`':
                        $stmt->bindValue($identifier, $this->strstatement, PDO::PARAM_STR);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`STRDESCRIPTION`':
                        $stmt->bindValue($identifier, $this->strdescription, PDO::PARAM_STR);
                        break;
                    case '`STRPRIMARYFIELD`':
                        $stmt->bindValue($identifier, $this->strprimaryfield, PDO::PARAM_STR);
                        break;
                    case '`DBVERSIONID`':
                        $stmt->bindValue($identifier, $this->dbversionid, PDO::PARAM_INT);
                        break;
                    case '`BLNACTIVE`':
                        $stmt->bindValue($identifier, $this->blnactive, PDO::PARAM_INT);
                        break;
                    case '`INTCREATEDBY`':
                        $stmt->bindValue($identifier, $this->intcreatedby, PDO::PARAM_INT);
                        break;
                    case '`INTMODIFIEDBY`':
                        $stmt->bindValue($identifier, $this->intmodifiedby, PDO::PARAM_INT);
                        break;
                    case '`DTCREATEDDATE`':
                        $stmt->bindValue($identifier, $this->dtcreateddate, PDO::PARAM_STR);
                        break;
                    case '`DTMODIFIEDDATE`':
                        $stmt->bindValue($identifier, $this->dtmodifieddate, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setSqlqueryId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = SysSqlqueryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSysWebpages !== null) {
                    foreach ($this->collSysWebpages as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SysSqlqueryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getSqlqueryId();
                break;
            case 1:
                return $this->getStatement();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getPrimaryfield();
                break;
            case 5:
                return $this->getDbversionid();
                break;
            case 6:
                return $this->getActive();
                break;
            case 7:
                return $this->getCreatedby();
                break;
            case 8:
                return $this->getModifiedby();
                break;
            case 9:
                return $this->getCreateddate();
                break;
            case 10:
                return $this->getModifieddate();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['SysSqlquery'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysSqlquery'][$this->getPrimaryKey()] = true;
        $keys = SysSqlqueryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSqlqueryId(),
            $keys[1] => $this->getStatement(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getPrimaryfield(),
            $keys[5] => $this->getDbversionid(),
            $keys[6] => $this->getActive(),
            $keys[7] => $this->getCreatedby(),
            $keys[8] => $this->getModifiedby(),
            $keys[9] => $this->getCreateddate(),
            $keys[10] => $this->getModifieddate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collSysWebpages) {
                $result['SysWebpages'] = $this->collSysWebpages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SysSqlqueryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setSqlqueryId($value);
                break;
            case 1:
                $this->setStatement($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setPrimaryfield($value);
                break;
            case 5:
                $this->setDbversionid($value);
                break;
            case 6:
                $this->setActive($value);
                break;
            case 7:
                $this->setCreatedby($value);
                break;
            case 8:
                $this->setModifiedby($value);
                break;
            case 9:
                $this->setCreateddate($value);
                break;
            case 10:
                $this->setModifieddate($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = SysSqlqueryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSqlqueryId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStatement($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPrimaryfield($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDbversionid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setActive($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCreatedby($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setModifiedby($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCreateddate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setModifieddate($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysSqlqueryPeer::DATABASE_NAME);

        if ($this->isColumnModified(SysSqlqueryPeer::SQLQUERY_ID)) $criteria->add(SysSqlqueryPeer::SQLQUERY_ID, $this->sqlquery_id);
        if ($this->isColumnModified(SysSqlqueryPeer::STRSTATEMENT)) $criteria->add(SysSqlqueryPeer::STRSTATEMENT, $this->strstatement);
        if ($this->isColumnModified(SysSqlqueryPeer::STRNAME)) $criteria->add(SysSqlqueryPeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysSqlqueryPeer::STRDESCRIPTION)) $criteria->add(SysSqlqueryPeer::STRDESCRIPTION, $this->strdescription);
        if ($this->isColumnModified(SysSqlqueryPeer::STRPRIMARYFIELD)) $criteria->add(SysSqlqueryPeer::STRPRIMARYFIELD, $this->strprimaryfield);
        if ($this->isColumnModified(SysSqlqueryPeer::DBVERSIONID)) $criteria->add(SysSqlqueryPeer::DBVERSIONID, $this->dbversionid);
        if ($this->isColumnModified(SysSqlqueryPeer::BLNACTIVE)) $criteria->add(SysSqlqueryPeer::BLNACTIVE, $this->blnactive);
        if ($this->isColumnModified(SysSqlqueryPeer::INTCREATEDBY)) $criteria->add(SysSqlqueryPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysSqlqueryPeer::INTMODIFIEDBY)) $criteria->add(SysSqlqueryPeer::INTMODIFIEDBY, $this->intmodifiedby);
        if ($this->isColumnModified(SysSqlqueryPeer::DTCREATEDDATE)) $criteria->add(SysSqlqueryPeer::DTCREATEDDATE, $this->dtcreateddate);
        if ($this->isColumnModified(SysSqlqueryPeer::DTMODIFIEDDATE)) $criteria->add(SysSqlqueryPeer::DTMODIFIEDDATE, $this->dtmodifieddate);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(SysSqlqueryPeer::DATABASE_NAME);
        $criteria->add(SysSqlqueryPeer::SQLQUERY_ID, $this->sqlquery_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getSqlqueryId();
    }

    /**
     * Generic method to set the primary key (sqlquery_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSqlqueryId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSqlqueryId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysSqlquery (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStatement($this->getStatement());
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setPrimaryfield($this->getPrimaryfield());
        $copyObj->setDbversionid($this->getDbversionid());
        $copyObj->setActive($this->getActive());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setModifiedby($this->getModifiedby());
        $copyObj->setCreateddate($this->getCreateddate());
        $copyObj->setModifieddate($this->getModifieddate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSysWebpages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSysWebpage($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSqlqueryId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return SysSqlquery Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return SysSqlqueryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysSqlqueryPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('SysWebpage' == $relationName) {
            $this->initSysWebpages();
        }
    }

    /**
     * Clears out the collSysWebpages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSysWebpages()
     */
    public function clearSysWebpages()
    {
        $this->collSysWebpages = null; // important to set this to null since that means it is uninitialized
        $this->collSysWebpagesPartial = null;
    }

    /**
     * reset is the collSysWebpages collection loaded partially
     *
     * @return void
     */
    public function resetPartialSysWebpages($v = true)
    {
        $this->collSysWebpagesPartial = $v;
    }

    /**
     * Initializes the collSysWebpages collection.
     *
     * By default this just sets the collSysWebpages collection to an empty array (like clearcollSysWebpages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSysWebpages($overrideExisting = true)
    {
        if (null !== $this->collSysWebpages && !$overrideExisting) {
            return;
        }
        $this->collSysWebpages = new PropelObjectCollection();
        $this->collSysWebpages->setModel('SysWebpage');
    }

    /**
     * Gets an array of SysWebpage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SysSqlquery is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SysWebpage[] List of SysWebpage objects
     * @throws PropelException
     */
    public function getSysWebpages($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSysWebpagesPartial && !$this->isNew();
        if (null === $this->collSysWebpages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSysWebpages) {
                // return empty collection
                $this->initSysWebpages();
            } else {
                $collSysWebpages = SysWebpageQuery::create(null, $criteria)
                    ->filterBySysSqlquery($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSysWebpagesPartial && count($collSysWebpages)) {
                      $this->initSysWebpages(false);

                      foreach($collSysWebpages as $obj) {
                        if (false == $this->collSysWebpages->contains($obj)) {
                          $this->collSysWebpages->append($obj);
                        }
                      }

                      $this->collSysWebpagesPartial = true;
                    }

                    return $collSysWebpages;
                }

                if($partial && $this->collSysWebpages) {
                    foreach($this->collSysWebpages as $obj) {
                        if($obj->isNew()) {
                            $collSysWebpages[] = $obj;
                        }
                    }
                }

                $this->collSysWebpages = $collSysWebpages;
                $this->collSysWebpagesPartial = false;
            }
        }

        return $this->collSysWebpages;
    }

    /**
     * Sets a collection of SysWebpage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sysWebpages A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setSysWebpages(PropelCollection $sysWebpages, PropelPDO $con = null)
    {
        $this->sysWebpagesScheduledForDeletion = $this->getSysWebpages(new Criteria(), $con)->diff($sysWebpages);

        foreach ($this->sysWebpagesScheduledForDeletion as $sysWebpageRemoved) {
            $sysWebpageRemoved->setSysSqlquery(null);
        }

        $this->collSysWebpages = null;
        foreach ($sysWebpages as $sysWebpage) {
            $this->addSysWebpage($sysWebpage);
        }

        $this->collSysWebpages = $sysWebpages;
        $this->collSysWebpagesPartial = false;
    }

    /**
     * Returns the number of related SysWebpage objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SysWebpage objects.
     * @throws PropelException
     */
    public function countSysWebpages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSysWebpagesPartial && !$this->isNew();
        if (null === $this->collSysWebpages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSysWebpages) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getSysWebpages());
                }
                $query = SysWebpageQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySysSqlquery($this)
                    ->count($con);
            }
        } else {
            return count($this->collSysWebpages);
        }
    }

    /**
     * Method called to associate a SysWebpage object to this object
     * through the SysWebpage foreign key attribute.
     *
     * @param    SysWebpage $l SysWebpage
     * @return SysSqlquery The current object (for fluent API support)
     */
    public function addSysWebpage(SysWebpage $l)
    {
        if ($this->collSysWebpages === null) {
            $this->initSysWebpages();
            $this->collSysWebpagesPartial = true;
        }
        if (!$this->collSysWebpages->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddSysWebpage($l);
        }

        return $this;
    }

    /**
     * @param	SysWebpage $sysWebpage The sysWebpage object to add.
     */
    protected function doAddSysWebpage($sysWebpage)
    {
        $this->collSysWebpages[]= $sysWebpage;
        $sysWebpage->setSysSqlquery($this);
    }

    /**
     * @param	SysWebpage $sysWebpage The sysWebpage object to remove.
     */
    public function removeSysWebpage($sysWebpage)
    {
        if ($this->getSysWebpages()->contains($sysWebpage)) {
            $this->collSysWebpages->remove($this->collSysWebpages->search($sysWebpage));
            if (null === $this->sysWebpagesScheduledForDeletion) {
                $this->sysWebpagesScheduledForDeletion = clone $this->collSysWebpages;
                $this->sysWebpagesScheduledForDeletion->clear();
            }
            $this->sysWebpagesScheduledForDeletion[]= $sysWebpage;
            $sysWebpage->setSysSqlquery(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SysSqlquery is new, it will return
     * an empty collection; or if this SysSqlquery has previously
     * been saved, it will retrieve related SysWebpages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SysSqlquery.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SysWebpage[] List of SysWebpage objects
     */
    public function getSysWebpagesJoinSysWebtemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SysWebpageQuery::create(null, $criteria);
        $query->joinWith('SysWebtemplate', $join_behavior);

        return $this->getSysWebpages($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sqlquery_id = null;
        $this->strstatement = null;
        $this->strname = null;
        $this->strdescription = null;
        $this->strprimaryfield = null;
        $this->dbversionid = null;
        $this->blnactive = null;
        $this->intcreatedby = null;
        $this->intmodifiedby = null;
        $this->dtcreateddate = null;
        $this->dtmodifieddate = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collSysWebpages) {
                foreach ($this->collSysWebpages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collSysWebpages instanceof PropelCollection) {
            $this->collSysWebpages->clearIterator();
        }
        $this->collSysWebpages = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SysSqlqueryPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     SysSqlquery The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = SysSqlqueryPeer::DTMODIFIEDDATE;

        return $this;
    }

    // dbversion behavior

    /**
     * Set common function to return the Database Version ID for DBVersion and SQLAudit Behavior
     *
     * @return     Value of <column name="DBVersionID" phpName="Dbversionid" type="BIGINT" required="false"/>
     */

     protected function getDefaultDBVersionid()
     {
         return $this->getDbversionid();
     }


}
