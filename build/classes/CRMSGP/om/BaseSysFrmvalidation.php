<?php


/**
 * Base class that represents a row from the 'SYS_FrmValidation' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysFrmvalidation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysFrmvalidationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysFrmvalidationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the frmvalidation_id field.
     * @var        string
     */
    protected $frmvalidation_id;

    /**
     * The value for the strname field.
     * @var        string
     */
    protected $strname;

    /**
     * The value for the strclassname field.
     * @var        string
     */
    protected $strclassname;

    /**
     * The value for the strvariables field.
     * @var        string
     */
    protected $strvariables;

    /**
     * The value for the strjscode field.
     * @var        string
     */
    protected $strjscode;

    /**
     * The value for the strisvalidcode field.
     * @var        string
     */
    protected $strisvalidcode;

    /**
     * The value for the strothercode field.
     * @var        string
     */
    protected $strothercode;

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
     * Get the [frmvalidation_id] column value.
     *
     * @return string
     */
    public function getFrmvalidationId()
    {
        return $this->frmvalidation_id;
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
     * Get the [strclassname] column value.
     *
     * @return string
     */
    public function getClassname()
    {
        return $this->strclassname;
    }

    /**
     * Get the [strvariables] column value.
     *
     * @return string
     */
    public function getVariables()
    {
        return $this->strvariables;
    }

    /**
     * Get the [strjscode] column value.
     *
     * @return string
     */
    public function getJscode()
    {
        return $this->strjscode;
    }

    /**
     * Get the [strisvalidcode] column value.
     *
     * @return string
     */
    public function getIsvalidcode()
    {
        return $this->strisvalidcode;
    }

    /**
     * Get the [strothercode] column value.
     *
     * @return string
     */
    public function getOthercode()
    {
        return $this->strothercode;
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
     * Set the value of [frmvalidation_id] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setFrmvalidationId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->frmvalidation_id !== $v) {
            $this->frmvalidation_id = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::FRMVALIDATION_ID;
        }


        return $this;
    } // setFrmvalidationId()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [strclassname] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setClassname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strclassname !== $v) {
            $this->strclassname = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STRCLASSNAME;
        }


        return $this;
    } // setClassname()

    /**
     * Set the value of [strvariables] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setVariables($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strvariables !== $v) {
            $this->strvariables = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STRVARIABLES;
        }


        return $this;
    } // setVariables()

    /**
     * Set the value of [strjscode] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setJscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strjscode !== $v) {
            $this->strjscode = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STRJSCODE;
        }


        return $this;
    } // setJscode()

    /**
     * Set the value of [strisvalidcode] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setIsvalidcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strisvalidcode !== $v) {
            $this->strisvalidcode = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STRISVALIDCODE;
        }


        return $this;
    } // setIsvalidcode()

    /**
     * Set the value of [strothercode] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setOthercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strothercode !== $v) {
            $this->strothercode = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::STROTHERCODE;
        }


        return $this;
    } // setOthercode()

    /**
     * Set the value of [dbversionid] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setDbversionid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dbversionid !== $v) {
            $this->dbversionid = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::DBVERSIONID;
        }


        return $this;
    } // setDbversionid()

    /**
     * Set the value of [blnactive] column.
     *
     * @param int $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnactive !== $v) {
            $this->blnactive = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::BLNACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Set the value of [intmodifiedby] column.
     *
     * @param string $v new value
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setModifiedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intmodifiedby !== $v) {
            $this->intmodifiedby = $v;
            $this->modifiedColumns[] = SysFrmvalidationPeer::INTMODIFIEDBY;
        }


        return $this;
    } // setModifiedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysFrmvalidationPeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Sets the value of [dtmodifieddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysFrmvalidation The current object (for fluent API support)
     */
    public function setModifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtmodifieddate !== null && $tmpDt = new DateTime($this->dtmodifieddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SysFrmvalidationPeer::DTMODIFIEDDATE;
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

            $this->frmvalidation_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->strname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strclassname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strvariables = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strjscode = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->strisvalidcode = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->strothercode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->dbversionid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->blnactive = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->intcreatedby = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->intmodifiedby = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->dtcreateddate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->dtmodifieddate = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = SysFrmvalidationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysFrmvalidation object", $e);
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
            $con = Propel::getConnection(SysFrmvalidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysFrmvalidationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SysFrmvalidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysFrmvalidationQuery::create()
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
            $con = Propel::getConnection(SysFrmvalidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysFrmvalidationPeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
                if (!$this->isColumnModified(SysFrmvalidationPeer::DTMODIFIEDDATE)) {
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
                if ($this->isModified() && !$this->isColumnModified(SysFrmvalidationPeer::DTMODIFIEDDATE)) {
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

                SysFrmvalidationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SysFrmvalidationPeer::FRMVALIDATION_ID;
        if (null !== $this->frmvalidation_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysFrmvalidationPeer::FRMVALIDATION_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysFrmvalidationPeer::FRMVALIDATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`FRMVALIDATION_ID`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STRCLASSNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRCLASSNAME`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STRVARIABLES)) {
            $modifiedColumns[':p' . $index++]  = '`STRVARIABLES`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STRJSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`STRJSCODE`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STRISVALIDCODE)) {
            $modifiedColumns[':p' . $index++]  = '`STRISVALIDCODE`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::STROTHERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`STROTHERCODE`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::DBVERSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`DBVERSIONID`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::BLNACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`BLNACTIVE`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::INTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTMODIFIEDBY`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }
        if ($this->isColumnModified(SysFrmvalidationPeer::DTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTMODIFIEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_FrmValidation` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`FRMVALIDATION_ID`':
                        $stmt->bindValue($identifier, $this->frmvalidation_id, PDO::PARAM_INT);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`STRCLASSNAME`':
                        $stmt->bindValue($identifier, $this->strclassname, PDO::PARAM_STR);
                        break;
                    case '`STRVARIABLES`':
                        $stmt->bindValue($identifier, $this->strvariables, PDO::PARAM_STR);
                        break;
                    case '`STRJSCODE`':
                        $stmt->bindValue($identifier, $this->strjscode, PDO::PARAM_STR);
                        break;
                    case '`STRISVALIDCODE`':
                        $stmt->bindValue($identifier, $this->strisvalidcode, PDO::PARAM_STR);
                        break;
                    case '`STROTHERCODE`':
                        $stmt->bindValue($identifier, $this->strothercode, PDO::PARAM_STR);
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
        $this->setFrmvalidationId($pk);

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


            if (($retval = SysFrmvalidationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SysFrmvalidationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFrmvalidationId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getClassname();
                break;
            case 3:
                return $this->getVariables();
                break;
            case 4:
                return $this->getJscode();
                break;
            case 5:
                return $this->getIsvalidcode();
                break;
            case 6:
                return $this->getOthercode();
                break;
            case 7:
                return $this->getDbversionid();
                break;
            case 8:
                return $this->getActive();
                break;
            case 9:
                return $this->getCreatedby();
                break;
            case 10:
                return $this->getModifiedby();
                break;
            case 11:
                return $this->getCreateddate();
                break;
            case 12:
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['SysFrmvalidation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysFrmvalidation'][$this->getPrimaryKey()] = true;
        $keys = SysFrmvalidationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFrmvalidationId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getClassname(),
            $keys[3] => $this->getVariables(),
            $keys[4] => $this->getJscode(),
            $keys[5] => $this->getIsvalidcode(),
            $keys[6] => $this->getOthercode(),
            $keys[7] => $this->getDbversionid(),
            $keys[8] => $this->getActive(),
            $keys[9] => $this->getCreatedby(),
            $keys[10] => $this->getModifiedby(),
            $keys[11] => $this->getCreateddate(),
            $keys[12] => $this->getModifieddate(),
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
        $pos = SysFrmvalidationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFrmvalidationId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setClassname($value);
                break;
            case 3:
                $this->setVariables($value);
                break;
            case 4:
                $this->setJscode($value);
                break;
            case 5:
                $this->setIsvalidcode($value);
                break;
            case 6:
                $this->setOthercode($value);
                break;
            case 7:
                $this->setDbversionid($value);
                break;
            case 8:
                $this->setActive($value);
                break;
            case 9:
                $this->setCreatedby($value);
                break;
            case 10:
                $this->setModifiedby($value);
                break;
            case 11:
                $this->setCreateddate($value);
                break;
            case 12:
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
        $keys = SysFrmvalidationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFrmvalidationId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClassname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVariables($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setJscode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIsvalidcode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOthercode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDbversionid($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setActive($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCreatedby($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setModifiedby($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCreateddate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setModifieddate($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysFrmvalidationPeer::DATABASE_NAME);

        if ($this->isColumnModified(SysFrmvalidationPeer::FRMVALIDATION_ID)) $criteria->add(SysFrmvalidationPeer::FRMVALIDATION_ID, $this->frmvalidation_id);
        if ($this->isColumnModified(SysFrmvalidationPeer::STRNAME)) $criteria->add(SysFrmvalidationPeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysFrmvalidationPeer::STRCLASSNAME)) $criteria->add(SysFrmvalidationPeer::STRCLASSNAME, $this->strclassname);
        if ($this->isColumnModified(SysFrmvalidationPeer::STRVARIABLES)) $criteria->add(SysFrmvalidationPeer::STRVARIABLES, $this->strvariables);
        if ($this->isColumnModified(SysFrmvalidationPeer::STRJSCODE)) $criteria->add(SysFrmvalidationPeer::STRJSCODE, $this->strjscode);
        if ($this->isColumnModified(SysFrmvalidationPeer::STRISVALIDCODE)) $criteria->add(SysFrmvalidationPeer::STRISVALIDCODE, $this->strisvalidcode);
        if ($this->isColumnModified(SysFrmvalidationPeer::STROTHERCODE)) $criteria->add(SysFrmvalidationPeer::STROTHERCODE, $this->strothercode);
        if ($this->isColumnModified(SysFrmvalidationPeer::DBVERSIONID)) $criteria->add(SysFrmvalidationPeer::DBVERSIONID, $this->dbversionid);
        if ($this->isColumnModified(SysFrmvalidationPeer::BLNACTIVE)) $criteria->add(SysFrmvalidationPeer::BLNACTIVE, $this->blnactive);
        if ($this->isColumnModified(SysFrmvalidationPeer::INTCREATEDBY)) $criteria->add(SysFrmvalidationPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysFrmvalidationPeer::INTMODIFIEDBY)) $criteria->add(SysFrmvalidationPeer::INTMODIFIEDBY, $this->intmodifiedby);
        if ($this->isColumnModified(SysFrmvalidationPeer::DTCREATEDDATE)) $criteria->add(SysFrmvalidationPeer::DTCREATEDDATE, $this->dtcreateddate);
        if ($this->isColumnModified(SysFrmvalidationPeer::DTMODIFIEDDATE)) $criteria->add(SysFrmvalidationPeer::DTMODIFIEDDATE, $this->dtmodifieddate);

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
        $criteria = new Criteria(SysFrmvalidationPeer::DATABASE_NAME);
        $criteria->add(SysFrmvalidationPeer::FRMVALIDATION_ID, $this->frmvalidation_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getFrmvalidationId();
    }

    /**
     * Generic method to set the primary key (frmvalidation_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFrmvalidationId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFrmvalidationId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysFrmvalidation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setClassname($this->getClassname());
        $copyObj->setVariables($this->getVariables());
        $copyObj->setJscode($this->getJscode());
        $copyObj->setIsvalidcode($this->getIsvalidcode());
        $copyObj->setOthercode($this->getOthercode());
        $copyObj->setDbversionid($this->getDbversionid());
        $copyObj->setActive($this->getActive());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setModifiedby($this->getModifiedby());
        $copyObj->setCreateddate($this->getCreateddate());
        $copyObj->setModifieddate($this->getModifieddate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFrmvalidationId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SysFrmvalidation Clone of current object.
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
     * @return SysFrmvalidationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysFrmvalidationPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->frmvalidation_id = null;
        $this->strname = null;
        $this->strclassname = null;
        $this->strvariables = null;
        $this->strjscode = null;
        $this->strisvalidcode = null;
        $this->strothercode = null;
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
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SysFrmvalidationPeer::DEFAULT_STRING_FORMAT);
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
     * @return     SysFrmvalidation The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = SysFrmvalidationPeer::DTMODIFIEDDATE;

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
