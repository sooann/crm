<?php


/**
 * Base class that represents a row from the 'SEC_SQLAudit' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSecSqlaudit extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SecSqlauditPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SecSqlauditPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sqlaudit_id field.
     * @var        string
     */
    protected $sqlaudit_id;

    /**
     * The value for the strsqlstatement field.
     * @var        string
     */
    protected $strsqlstatement;

    /**
     * The value for the strparameters field.
     * @var        string
     */
    protected $strparameters;

    /**
     * The value for the strpageurl field.
     * @var        string
     */
    protected $strpageurl;

    /**
     * The value for the intrecordid field.
     * @var        string
     */
    protected $intrecordid;

    /**
     * The value for the intversionid field.
     * @var        string
     */
    protected $intversionid;

    /**
     * The value for the dtstartdate field.
     * @var        string
     */
    protected $dtstartdate;

    /**
     * The value for the dtenddate field.
     * @var        string
     */
    protected $dtenddate;

    /**
     * The value for the intcreatedby field.
     * @var        string
     */
    protected $intcreatedby;

    /**
     * The value for the dtcreateddate field.
     * @var        string
     */
    protected $dtcreateddate;

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
     * Get the [sqlaudit_id] column value.
     *
     * @return string
     */
    public function getSqlauditId()
    {
        return $this->sqlaudit_id;
    }

    /**
     * Get the [strsqlstatement] column value.
     *
     * @return string
     */
    public function getSqlstatement()
    {
        return $this->strsqlstatement;
    }

    /**
     * Get the [strparameters] column value.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->strparameters;
    }

    /**
     * Get the [strpageurl] column value.
     *
     * @return string
     */
    public function getPageurl()
    {
        return $this->strpageurl;
    }

    /**
     * Get the [intrecordid] column value.
     *
     * @return string
     */
    public function getRecordid()
    {
        return $this->intrecordid;
    }

    /**
     * Get the [intversionid] column value.
     *
     * @return string
     */
    public function getVersionid()
    {
        return $this->intversionid;
    }

    /**
     * Get the [optionally formatted] temporal [dtstartdate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartdate($format = 'Y-m-d H:i:s')
    {
        if ($this->dtstartdate === null) {
            return null;
        }

        if ($this->dtstartdate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->dtstartdate);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dtstartdate, true), $x);
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
     * Get the [optionally formatted] temporal [dtenddate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEnddate($format = 'Y-m-d H:i:s')
    {
        if ($this->dtenddate === null) {
            return null;
        }

        if ($this->dtenddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->dtenddate);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dtenddate, true), $x);
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
     * Get the [intcreatedby] column value.
     *
     * @return string
     */
    public function getCreatedby()
    {
        return $this->intcreatedby;
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
     * Set the value of [sqlaudit_id] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setSqlauditId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sqlaudit_id !== $v) {
            $this->sqlaudit_id = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::SQLAUDIT_ID;
        }


        return $this;
    } // setSqlauditId()

    /**
     * Set the value of [strsqlstatement] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setSqlstatement($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strsqlstatement !== $v) {
            $this->strsqlstatement = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::STRSQLSTATEMENT;
        }


        return $this;
    } // setSqlstatement()

    /**
     * Set the value of [strparameters] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setParameters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strparameters !== $v) {
            $this->strparameters = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::STRPARAMETERS;
        }


        return $this;
    } // setParameters()

    /**
     * Set the value of [strpageurl] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setPageurl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strpageurl !== $v) {
            $this->strpageurl = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::STRPAGEURL;
        }


        return $this;
    } // setPageurl()

    /**
     * Set the value of [intrecordid] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setRecordid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intrecordid !== $v) {
            $this->intrecordid = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::INTRECORDID;
        }


        return $this;
    } // setRecordid()

    /**
     * Set the value of [intversionid] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setVersionid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intversionid !== $v) {
            $this->intversionid = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::INTVERSIONID;
        }


        return $this;
    } // setVersionid()

    /**
     * Sets the value of [dtstartdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setStartdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtstartdate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtstartdate !== null && $tmpDt = new DateTime($this->dtstartdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtstartdate = $newDateAsString;
                $this->modifiedColumns[] = SecSqlauditPeer::DTSTARTDATE;
            }
        } // if either are not null


        return $this;
    } // setStartdate()

    /**
     * Sets the value of [dtenddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setEnddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtenddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtenddate !== null && $tmpDt = new DateTime($this->dtenddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtenddate = $newDateAsString;
                $this->modifiedColumns[] = SecSqlauditPeer::DTENDDATE;
            }
        } // if either are not null


        return $this;
    } // setEnddate()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SecSqlauditPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SecSqlaudit The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SecSqlauditPeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

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

            $this->sqlaudit_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->strsqlstatement = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strparameters = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strpageurl = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->intrecordid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intversionid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->dtstartdate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->dtenddate = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->intcreatedby = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->dtcreateddate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = SecSqlauditPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SecSqlaudit object", $e);
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
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SecSqlauditPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SecSqlauditQuery::create()
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
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SecSqlauditPeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
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

                SecSqlauditPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SecSqlauditPeer::SQLAUDIT_ID;
        if (null !== $this->sqlaudit_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SecSqlauditPeer::SQLAUDIT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SecSqlauditPeer::SQLAUDIT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SQLAUDIT_ID`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::STRSQLSTATEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`STRSQLSTATEMENT`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::STRPARAMETERS)) {
            $modifiedColumns[':p' . $index++]  = '`STRPARAMETERS`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::STRPAGEURL)) {
            $modifiedColumns[':p' . $index++]  = '`STRPAGEURL`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::INTRECORDID)) {
            $modifiedColumns[':p' . $index++]  = '`INTRECORDID`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::INTVERSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`INTVERSIONID`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::DTSTARTDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTSTARTDATE`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::DTENDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTENDDATE`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SecSqlauditPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SEC_SQLAudit` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SQLAUDIT_ID`':
                        $stmt->bindValue($identifier, $this->sqlaudit_id, PDO::PARAM_INT);
                        break;
                    case '`STRSQLSTATEMENT`':
                        $stmt->bindValue($identifier, $this->strsqlstatement, PDO::PARAM_STR);
                        break;
                    case '`STRPARAMETERS`':
                        $stmt->bindValue($identifier, $this->strparameters, PDO::PARAM_STR);
                        break;
                    case '`STRPAGEURL`':
                        $stmt->bindValue($identifier, $this->strpageurl, PDO::PARAM_STR);
                        break;
                    case '`INTRECORDID`':
                        $stmt->bindValue($identifier, $this->intrecordid, PDO::PARAM_INT);
                        break;
                    case '`INTVERSIONID`':
                        $stmt->bindValue($identifier, $this->intversionid, PDO::PARAM_INT);
                        break;
                    case '`DTSTARTDATE`':
                        $stmt->bindValue($identifier, $this->dtstartdate, PDO::PARAM_STR);
                        break;
                    case '`DTENDDATE`':
                        $stmt->bindValue($identifier, $this->dtenddate, PDO::PARAM_STR);
                        break;
                    case '`INTCREATEDBY`':
                        $stmt->bindValue($identifier, $this->intcreatedby, PDO::PARAM_INT);
                        break;
                    case '`DTCREATEDDATE`':
                        $stmt->bindValue($identifier, $this->dtcreateddate, PDO::PARAM_STR);
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
        $this->setSqlauditId($pk);

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


            if (($retval = SecSqlauditPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = SecSqlauditPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSqlauditId();
                break;
            case 1:
                return $this->getSqlstatement();
                break;
            case 2:
                return $this->getParameters();
                break;
            case 3:
                return $this->getPageurl();
                break;
            case 4:
                return $this->getRecordid();
                break;
            case 5:
                return $this->getVersionid();
                break;
            case 6:
                return $this->getStartdate();
                break;
            case 7:
                return $this->getEnddate();
                break;
            case 8:
                return $this->getCreatedby();
                break;
            case 9:
                return $this->getCreateddate();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['SecSqlaudit'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SecSqlaudit'][$this->getPrimaryKey()] = true;
        $keys = SecSqlauditPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSqlauditId(),
            $keys[1] => $this->getSqlstatement(),
            $keys[2] => $this->getParameters(),
            $keys[3] => $this->getPageurl(),
            $keys[4] => $this->getRecordid(),
            $keys[5] => $this->getVersionid(),
            $keys[6] => $this->getStartdate(),
            $keys[7] => $this->getEnddate(),
            $keys[8] => $this->getCreatedby(),
            $keys[9] => $this->getCreateddate(),
        );

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
        $pos = SecSqlauditPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSqlauditId($value);
                break;
            case 1:
                $this->setSqlstatement($value);
                break;
            case 2:
                $this->setParameters($value);
                break;
            case 3:
                $this->setPageurl($value);
                break;
            case 4:
                $this->setRecordid($value);
                break;
            case 5:
                $this->setVersionid($value);
                break;
            case 6:
                $this->setStartdate($value);
                break;
            case 7:
                $this->setEnddate($value);
                break;
            case 8:
                $this->setCreatedby($value);
                break;
            case 9:
                $this->setCreateddate($value);
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
        $keys = SecSqlauditPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSqlauditId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSqlstatement($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setParameters($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPageurl($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRecordid($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVersionid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStartdate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEnddate($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCreatedby($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCreateddate($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);

        if ($this->isColumnModified(SecSqlauditPeer::SQLAUDIT_ID)) $criteria->add(SecSqlauditPeer::SQLAUDIT_ID, $this->sqlaudit_id);
        if ($this->isColumnModified(SecSqlauditPeer::STRSQLSTATEMENT)) $criteria->add(SecSqlauditPeer::STRSQLSTATEMENT, $this->strsqlstatement);
        if ($this->isColumnModified(SecSqlauditPeer::STRPARAMETERS)) $criteria->add(SecSqlauditPeer::STRPARAMETERS, $this->strparameters);
        if ($this->isColumnModified(SecSqlauditPeer::STRPAGEURL)) $criteria->add(SecSqlauditPeer::STRPAGEURL, $this->strpageurl);
        if ($this->isColumnModified(SecSqlauditPeer::INTRECORDID)) $criteria->add(SecSqlauditPeer::INTRECORDID, $this->intrecordid);
        if ($this->isColumnModified(SecSqlauditPeer::INTVERSIONID)) $criteria->add(SecSqlauditPeer::INTVERSIONID, $this->intversionid);
        if ($this->isColumnModified(SecSqlauditPeer::DTSTARTDATE)) $criteria->add(SecSqlauditPeer::DTSTARTDATE, $this->dtstartdate);
        if ($this->isColumnModified(SecSqlauditPeer::DTENDDATE)) $criteria->add(SecSqlauditPeer::DTENDDATE, $this->dtenddate);
        if ($this->isColumnModified(SecSqlauditPeer::INTCREATEDBY)) $criteria->add(SecSqlauditPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SecSqlauditPeer::DTCREATEDDATE)) $criteria->add(SecSqlauditPeer::DTCREATEDDATE, $this->dtcreateddate);

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
        $criteria = new Criteria(SecSqlauditPeer::DATABASE_NAME);
        $criteria->add(SecSqlauditPeer::SQLAUDIT_ID, $this->sqlaudit_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getSqlauditId();
    }

    /**
     * Generic method to set the primary key (sqlaudit_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSqlauditId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSqlauditId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SecSqlaudit (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSqlstatement($this->getSqlstatement());
        $copyObj->setParameters($this->getParameters());
        $copyObj->setPageurl($this->getPageurl());
        $copyObj->setRecordid($this->getRecordid());
        $copyObj->setVersionid($this->getVersionid());
        $copyObj->setStartdate($this->getStartdate());
        $copyObj->setEnddate($this->getEnddate());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setCreateddate($this->getCreateddate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSqlauditId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SecSqlaudit Clone of current object.
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
     * @return SecSqlauditPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SecSqlauditPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sqlaudit_id = null;
        $this->strsqlstatement = null;
        $this->strparameters = null;
        $this->strpageurl = null;
        $this->intrecordid = null;
        $this->intversionid = null;
        $this->dtstartdate = null;
        $this->dtenddate = null;
        $this->intcreatedby = null;
        $this->dtcreateddate = null;
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
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SecSqlauditPeer::DEFAULT_STRING_FORMAT);
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

}
