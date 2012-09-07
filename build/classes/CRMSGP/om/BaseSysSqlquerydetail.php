<?php


/**
 * Base class that represents a row from the 'SYS_SQLQueryDetail' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysSqlquerydetail extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysSqlquerydetailPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysSqlquerydetailPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the sqlquerydetail_id field.
     * @var        string
     */
    protected $sqlquerydetail_id;

    /**
     * The value for the sqlquery_id field.
     * @var        string
     */
    protected $sqlquery_id;

    /**
     * The value for the strparameter field.
     * @var        string
     */
    protected $strparameter;

    /**
     * The value for the strname field.
     * @var        string
     */
    protected $strname;

    /**
     * The value for the inttype field.
     * @var        int
     */
    protected $inttype;

    /**
     * The value for the strtypename field.
     * @var        string
     */
    protected $strtypename;

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
     * @var        SysSqlquery
     */
    protected $aSysSqlquery;

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
     * Get the [sqlquerydetail_id] column value.
     *
     * @return string
     */
    public function getSqlquerydetailId()
    {
        return $this->sqlquerydetail_id;
    }

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
     * Get the [strparameter] column value.
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->strparameter;
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
     * Get the [inttype] column value.
     *
     * @return int
     */
    public function getType()
    {
        return $this->inttype;
    }

    /**
     * Get the [strtypename] column value.
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->strtypename;
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
     * Set the value of [sqlquerydetail_id] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setSqlquerydetailId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sqlquerydetail_id !== $v) {
            $this->sqlquerydetail_id = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::SQLQUERYDETAIL_ID;
        }


        return $this;
    } // setSqlquerydetailId()

    /**
     * Set the value of [sqlquery_id] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setSqlqueryId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sqlquery_id !== $v) {
            $this->sqlquery_id = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::SQLQUERY_ID;
        }

        if ($this->aSysSqlquery !== null && $this->aSysSqlquery->getSqlqueryId() !== $v) {
            $this->aSysSqlquery = null;
        }


        return $this;
    } // setSqlqueryId()

    /**
     * Set the value of [strparameter] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setParameter($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strparameter !== $v) {
            $this->strparameter = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::STRPARAMETER;
        }


        return $this;
    } // setParameter()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [inttype] column.
     *
     * @param int $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inttype !== $v) {
            $this->inttype = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::INTTYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [strtypename] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setTypename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strtypename !== $v) {
            $this->strtypename = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::STRTYPENAME;
        }


        return $this;
    } // setTypename()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysSqlquerydetailPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysSqlquerydetail The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysSqlquerydetailPeer::DTCREATEDDATE;
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

            $this->sqlquerydetail_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->sqlquery_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strparameter = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->inttype = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->strtypename = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->intcreatedby = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->dtcreateddate = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = SysSqlquerydetailPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysSqlquerydetail object", $e);
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

        if ($this->aSysSqlquery !== null && $this->sqlquery_id !== $this->aSysSqlquery->getSqlqueryId()) {
            $this->aSysSqlquery = null;
        }
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
            $con = Propel::getConnection(SysSqlquerydetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysSqlquerydetailPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSysSqlquery = null;
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
            $con = Propel::getConnection(SysSqlquerydetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysSqlquerydetailQuery::create()
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
            $con = Propel::getConnection(SysSqlquerydetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysSqlquerydetailPeer::DTCREATEDDATE)) {
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

                if (!class_exists('SecSqlaudit', false)) {
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

                SysSqlquerydetailPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSysSqlquery !== null) {
                if ($this->aSysSqlquery->isModified() || $this->aSysSqlquery->isNew()) {
                    $affectedRows += $this->aSysSqlquery->save($con);
                }
                $this->setSysSqlquery($this->aSysSqlquery);
            }

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

        $this->modifiedColumns[] = SysSqlquerydetailPeer::SQLQUERYDETAIL_ID;
        if (null !== $this->sqlquerydetail_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysSqlquerydetailPeer::SQLQUERYDETAIL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SQLQUERYDETAIL_ID`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::SQLQUERY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SQLQUERY_ID`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRPARAMETER)) {
            $modifiedColumns[':p' . $index++]  = '`STRPARAMETER`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::INTTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`INTTYPE`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRTYPENAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRTYPENAME`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysSqlquerydetailPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_SQLQueryDetail` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SQLQUERYDETAIL_ID`':
                        $stmt->bindValue($identifier, $this->sqlquerydetail_id, PDO::PARAM_INT);
                        break;
                    case '`SQLQUERY_ID`':
                        $stmt->bindValue($identifier, $this->sqlquery_id, PDO::PARAM_INT);
                        break;
                    case '`STRPARAMETER`':
                        $stmt->bindValue($identifier, $this->strparameter, PDO::PARAM_STR);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`INTTYPE`':
                        $stmt->bindValue($identifier, $this->inttype, PDO::PARAM_INT);
                        break;
                    case '`STRTYPENAME`':
                        $stmt->bindValue($identifier, $this->strtypename, PDO::PARAM_STR);
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
        $this->setSqlquerydetailId($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSysSqlquery !== null) {
                if (!$this->aSysSqlquery->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSysSqlquery->getValidationFailures());
                }
            }


            if (($retval = SysSqlquerydetailPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SysSqlquerydetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSqlquerydetailId();
                break;
            case 1:
                return $this->getSqlqueryId();
                break;
            case 2:
                return $this->getParameter();
                break;
            case 3:
                return $this->getName();
                break;
            case 4:
                return $this->getType();
                break;
            case 5:
                return $this->getTypename();
                break;
            case 6:
                return $this->getCreatedby();
                break;
            case 7:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['SysSqlquerydetail'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysSqlquerydetail'][$this->getPrimaryKey()] = true;
        $keys = SysSqlquerydetailPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSqlquerydetailId(),
            $keys[1] => $this->getSqlqueryId(),
            $keys[2] => $this->getParameter(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getType(),
            $keys[5] => $this->getTypename(),
            $keys[6] => $this->getCreatedby(),
            $keys[7] => $this->getCreateddate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aSysSqlquery) {
                $result['SysSqlquery'] = $this->aSysSqlquery->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SysSqlquerydetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSqlquerydetailId($value);
                break;
            case 1:
                $this->setSqlqueryId($value);
                break;
            case 2:
                $this->setParameter($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setType($value);
                break;
            case 5:
                $this->setTypename($value);
                break;
            case 6:
                $this->setCreatedby($value);
                break;
            case 7:
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
        $keys = SysSqlquerydetailPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSqlquerydetailId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSqlqueryId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setParameter($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypename($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCreatedby($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCreateddate($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysSqlquerydetailPeer::DATABASE_NAME);

        if ($this->isColumnModified(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID)) $criteria->add(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $this->sqlquerydetail_id);
        if ($this->isColumnModified(SysSqlquerydetailPeer::SQLQUERY_ID)) $criteria->add(SysSqlquerydetailPeer::SQLQUERY_ID, $this->sqlquery_id);
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRPARAMETER)) $criteria->add(SysSqlquerydetailPeer::STRPARAMETER, $this->strparameter);
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRNAME)) $criteria->add(SysSqlquerydetailPeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysSqlquerydetailPeer::INTTYPE)) $criteria->add(SysSqlquerydetailPeer::INTTYPE, $this->inttype);
        if ($this->isColumnModified(SysSqlquerydetailPeer::STRTYPENAME)) $criteria->add(SysSqlquerydetailPeer::STRTYPENAME, $this->strtypename);
        if ($this->isColumnModified(SysSqlquerydetailPeer::INTCREATEDBY)) $criteria->add(SysSqlquerydetailPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysSqlquerydetailPeer::DTCREATEDDATE)) $criteria->add(SysSqlquerydetailPeer::DTCREATEDDATE, $this->dtcreateddate);

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
        $criteria = new Criteria(SysSqlquerydetailPeer::DATABASE_NAME);
        $criteria->add(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $this->sqlquerydetail_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getSqlquerydetailId();
    }

    /**
     * Generic method to set the primary key (sqlquerydetail_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSqlquerydetailId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSqlquerydetailId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysSqlquerydetail (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSqlqueryId($this->getSqlqueryId());
        $copyObj->setParameter($this->getParameter());
        $copyObj->setName($this->getName());
        $copyObj->setType($this->getType());
        $copyObj->setTypename($this->getTypename());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setCreateddate($this->getCreateddate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSqlquerydetailId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SysSqlquerydetail Clone of current object.
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
     * @return SysSqlquerydetailPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysSqlquerydetailPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SysSqlquery object.
     *
     * @param             SysSqlquery $v
     * @return SysSqlquerydetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSysSqlquery(SysSqlquery $v = null)
    {
        if ($v === null) {
            $this->setSqlqueryId(NULL);
        } else {
            $this->setSqlqueryId($v->getSqlqueryId());
        }

        $this->aSysSqlquery = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SysSqlquery object, it will not be re-added.
        if ($v !== null) {
            $v->addSysSqlquerydetail($this);
        }


        return $this;
    }


    /**
     * Get the associated SysSqlquery object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return SysSqlquery The associated SysSqlquery object.
     * @throws PropelException
     */
    public function getSysSqlquery(PropelPDO $con = null)
    {
        if ($this->aSysSqlquery === null && (($this->sqlquery_id !== "" && $this->sqlquery_id !== null))) {
            $this->aSysSqlquery = SysSqlqueryQuery::create()->findPk($this->sqlquery_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSysSqlquery->addSysSqlquerydetails($this);
             */
        }

        return $this->aSysSqlquery;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->sqlquerydetail_id = null;
        $this->sqlquery_id = null;
        $this->strparameter = null;
        $this->strname = null;
        $this->inttype = null;
        $this->strtypename = null;
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

        $this->aSysSqlquery = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SysSqlquerydetailPeer::DEFAULT_STRING_FORMAT);
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
