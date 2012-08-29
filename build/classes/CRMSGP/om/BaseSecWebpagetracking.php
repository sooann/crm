<?php


/**
 * Base class that represents a row from the 'SEC_WebpageTracking' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSecWebpagetracking extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SecWebpagetrackingPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SecWebpagetrackingPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the webpagetracking_id field.
     * @var        string
     */
    protected $webpagetracking_id;

    /**
     * The value for the strurl field.
     * @var        string
     */
    protected $strurl;

    /**
     * The value for the strrequestmethod field.
     * @var        string
     */
    protected $strrequestmethod;

    /**
     * The value for the strquerystring field.
     * @var        string
     */
    protected $strquerystring;

    /**
     * The value for the strpostdata field.
     * @var        string
     */
    protected $strpostdata;

    /**
     * The value for the strhttpuseragent field.
     * @var        string
     */
    protected $strhttpuseragent;

    /**
     * The value for the strremoteaddr field.
     * @var        string
     */
    protected $strremoteaddr;

    /**
     * The value for the strhttpreferer field.
     * @var        string
     */
    protected $strhttpreferer;

    /**
     * The value for the strsessionid field.
     * @var        string
     */
    protected $strsessionid;

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
     * Get the [webpagetracking_id] column value.
     *
     * @return string
     */
    public function getWebpagetrackingId()
    {
        return $this->webpagetracking_id;
    }

    /**
     * Get the [strurl] column value.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->strurl;
    }

    /**
     * Get the [strrequestmethod] column value.
     *
     * @return string
     */
    public function getRequestmethod()
    {
        return $this->strrequestmethod;
    }

    /**
     * Get the [strquerystring] column value.
     *
     * @return string
     */
    public function getQuerystring()
    {
        return $this->strquerystring;
    }

    /**
     * Get the [strpostdata] column value.
     *
     * @return string
     */
    public function getPostdata()
    {
        return $this->strpostdata;
    }

    /**
     * Get the [strhttpuseragent] column value.
     *
     * @return string
     */
    public function getHttpuseragent()
    {
        return $this->strhttpuseragent;
    }

    /**
     * Get the [strremoteaddr] column value.
     *
     * @return string
     */
    public function getRemoteaddr()
    {
        return $this->strremoteaddr;
    }

    /**
     * Get the [strhttpreferer] column value.
     *
     * @return string
     */
    public function getHttpreferer()
    {
        return $this->strhttpreferer;
    }

    /**
     * Get the [strsessionid] column value.
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->strsessionid;
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
     * Set the value of [webpagetracking_id] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setWebpagetrackingId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->webpagetracking_id !== $v) {
            $this->webpagetracking_id = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::WEBPAGETRACKING_ID;
        }


        return $this;
    } // setWebpagetrackingId()

    /**
     * Set the value of [strurl] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strurl !== $v) {
            $this->strurl = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRURL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [strrequestmethod] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setRequestmethod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strrequestmethod !== $v) {
            $this->strrequestmethod = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRREQUESTMETHOD;
        }


        return $this;
    } // setRequestmethod()

    /**
     * Set the value of [strquerystring] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setQuerystring($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strquerystring !== $v) {
            $this->strquerystring = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRQUERYSTRING;
        }


        return $this;
    } // setQuerystring()

    /**
     * Set the value of [strpostdata] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setPostdata($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strpostdata !== $v) {
            $this->strpostdata = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRPOSTDATA;
        }


        return $this;
    } // setPostdata()

    /**
     * Set the value of [strhttpuseragent] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setHttpuseragent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strhttpuseragent !== $v) {
            $this->strhttpuseragent = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRHTTPUSERAGENT;
        }


        return $this;
    } // setHttpuseragent()

    /**
     * Set the value of [strremoteaddr] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setRemoteaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strremoteaddr !== $v) {
            $this->strremoteaddr = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRREMOTEADDR;
        }


        return $this;
    } // setRemoteaddr()

    /**
     * Set the value of [strhttpreferer] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setHttpreferer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strhttpreferer !== $v) {
            $this->strhttpreferer = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRHTTPREFERER;
        }


        return $this;
    } // setHttpreferer()

    /**
     * Set the value of [strsessionid] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setSessionid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strsessionid !== $v) {
            $this->strsessionid = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::STRSESSIONID;
        }


        return $this;
    } // setSessionid()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SecWebpagetrackingPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SecWebpagetracking The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SecWebpagetrackingPeer::DTCREATEDDATE;
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

            $this->webpagetracking_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->strurl = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strrequestmethod = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strquerystring = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strpostdata = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->strhttpuseragent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->strremoteaddr = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->strhttpreferer = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->strsessionid = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->intcreatedby = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->dtcreateddate = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = SecWebpagetrackingPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SecWebpagetracking object", $e);
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
            $con = Propel::getConnection(SecWebpagetrackingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SecWebpagetrackingPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SecWebpagetrackingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SecWebpagetrackingQuery::create()
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
            $con = Propel::getConnection(SecWebpagetrackingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SecWebpagetrackingPeer::DTCREATEDDATE)) {
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

                SecWebpagetrackingPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SecWebpagetrackingPeer::WEBPAGETRACKING_ID;
        if (null !== $this->webpagetracking_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SecWebpagetrackingPeer::WEBPAGETRACKING_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SecWebpagetrackingPeer::WEBPAGETRACKING_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WEBPAGETRACKING_ID`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRURL)) {
            $modifiedColumns[':p' . $index++]  = '`STRURL`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRREQUESTMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`STRREQUESTMETHOD`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRQUERYSTRING)) {
            $modifiedColumns[':p' . $index++]  = '`STRQUERYSTRING`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRPOSTDATA)) {
            $modifiedColumns[':p' . $index++]  = '`STRPOSTDATA`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRHTTPUSERAGENT)) {
            $modifiedColumns[':p' . $index++]  = '`STRHTTPUSERAGENT`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRREMOTEADDR)) {
            $modifiedColumns[':p' . $index++]  = '`STRREMOTEADDR`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRHTTPREFERER)) {
            $modifiedColumns[':p' . $index++]  = '`STRHTTPREFERER`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRSESSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`STRSESSIONID`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SecWebpagetrackingPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SEC_WebpageTracking` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`WEBPAGETRACKING_ID`':
                        $stmt->bindValue($identifier, $this->webpagetracking_id, PDO::PARAM_INT);
                        break;
                    case '`STRURL`':
                        $stmt->bindValue($identifier, $this->strurl, PDO::PARAM_STR);
                        break;
                    case '`STRREQUESTMETHOD`':
                        $stmt->bindValue($identifier, $this->strrequestmethod, PDO::PARAM_STR);
                        break;
                    case '`STRQUERYSTRING`':
                        $stmt->bindValue($identifier, $this->strquerystring, PDO::PARAM_STR);
                        break;
                    case '`STRPOSTDATA`':
                        $stmt->bindValue($identifier, $this->strpostdata, PDO::PARAM_STR);
                        break;
                    case '`STRHTTPUSERAGENT`':
                        $stmt->bindValue($identifier, $this->strhttpuseragent, PDO::PARAM_STR);
                        break;
                    case '`STRREMOTEADDR`':
                        $stmt->bindValue($identifier, $this->strremoteaddr, PDO::PARAM_STR);
                        break;
                    case '`STRHTTPREFERER`':
                        $stmt->bindValue($identifier, $this->strhttpreferer, PDO::PARAM_STR);
                        break;
                    case '`STRSESSIONID`':
                        $stmt->bindValue($identifier, $this->strsessionid, PDO::PARAM_STR);
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
        $this->setWebpagetrackingId($pk);

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


            if (($retval = SecWebpagetrackingPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SecWebpagetrackingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getWebpagetrackingId();
                break;
            case 1:
                return $this->getUrl();
                break;
            case 2:
                return $this->getRequestmethod();
                break;
            case 3:
                return $this->getQuerystring();
                break;
            case 4:
                return $this->getPostdata();
                break;
            case 5:
                return $this->getHttpuseragent();
                break;
            case 6:
                return $this->getRemoteaddr();
                break;
            case 7:
                return $this->getHttpreferer();
                break;
            case 8:
                return $this->getSessionid();
                break;
            case 9:
                return $this->getCreatedby();
                break;
            case 10:
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
        if (isset($alreadyDumpedObjects['SecWebpagetracking'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SecWebpagetracking'][$this->getPrimaryKey()] = true;
        $keys = SecWebpagetrackingPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWebpagetrackingId(),
            $keys[1] => $this->getUrl(),
            $keys[2] => $this->getRequestmethod(),
            $keys[3] => $this->getQuerystring(),
            $keys[4] => $this->getPostdata(),
            $keys[5] => $this->getHttpuseragent(),
            $keys[6] => $this->getRemoteaddr(),
            $keys[7] => $this->getHttpreferer(),
            $keys[8] => $this->getSessionid(),
            $keys[9] => $this->getCreatedby(),
            $keys[10] => $this->getCreateddate(),
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
        $pos = SecWebpagetrackingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setWebpagetrackingId($value);
                break;
            case 1:
                $this->setUrl($value);
                break;
            case 2:
                $this->setRequestmethod($value);
                break;
            case 3:
                $this->setQuerystring($value);
                break;
            case 4:
                $this->setPostdata($value);
                break;
            case 5:
                $this->setHttpuseragent($value);
                break;
            case 6:
                $this->setRemoteaddr($value);
                break;
            case 7:
                $this->setHttpreferer($value);
                break;
            case 8:
                $this->setSessionid($value);
                break;
            case 9:
                $this->setCreatedby($value);
                break;
            case 10:
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
        $keys = SecWebpagetrackingPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setWebpagetrackingId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUrl($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRequestmethod($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setQuerystring($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPostdata($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHttpuseragent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRemoteaddr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHttpreferer($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSessionid($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCreatedby($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCreateddate($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SecWebpagetrackingPeer::DATABASE_NAME);

        if ($this->isColumnModified(SecWebpagetrackingPeer::WEBPAGETRACKING_ID)) $criteria->add(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $this->webpagetracking_id);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRURL)) $criteria->add(SecWebpagetrackingPeer::STRURL, $this->strurl);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRREQUESTMETHOD)) $criteria->add(SecWebpagetrackingPeer::STRREQUESTMETHOD, $this->strrequestmethod);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRQUERYSTRING)) $criteria->add(SecWebpagetrackingPeer::STRQUERYSTRING, $this->strquerystring);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRPOSTDATA)) $criteria->add(SecWebpagetrackingPeer::STRPOSTDATA, $this->strpostdata);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRHTTPUSERAGENT)) $criteria->add(SecWebpagetrackingPeer::STRHTTPUSERAGENT, $this->strhttpuseragent);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRREMOTEADDR)) $criteria->add(SecWebpagetrackingPeer::STRREMOTEADDR, $this->strremoteaddr);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRHTTPREFERER)) $criteria->add(SecWebpagetrackingPeer::STRHTTPREFERER, $this->strhttpreferer);
        if ($this->isColumnModified(SecWebpagetrackingPeer::STRSESSIONID)) $criteria->add(SecWebpagetrackingPeer::STRSESSIONID, $this->strsessionid);
        if ($this->isColumnModified(SecWebpagetrackingPeer::INTCREATEDBY)) $criteria->add(SecWebpagetrackingPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SecWebpagetrackingPeer::DTCREATEDDATE)) $criteria->add(SecWebpagetrackingPeer::DTCREATEDDATE, $this->dtcreateddate);

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
        $criteria = new Criteria(SecWebpagetrackingPeer::DATABASE_NAME);
        $criteria->add(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $this->webpagetracking_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getWebpagetrackingId();
    }

    /**
     * Generic method to set the primary key (webpagetracking_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWebpagetrackingId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getWebpagetrackingId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SecWebpagetracking (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUrl($this->getUrl());
        $copyObj->setRequestmethod($this->getRequestmethod());
        $copyObj->setQuerystring($this->getQuerystring());
        $copyObj->setPostdata($this->getPostdata());
        $copyObj->setHttpuseragent($this->getHttpuseragent());
        $copyObj->setRemoteaddr($this->getRemoteaddr());
        $copyObj->setHttpreferer($this->getHttpreferer());
        $copyObj->setSessionid($this->getSessionid());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setCreateddate($this->getCreateddate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWebpagetrackingId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SecWebpagetracking Clone of current object.
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
     * @return SecWebpagetrackingPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SecWebpagetrackingPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->webpagetracking_id = null;
        $this->strurl = null;
        $this->strrequestmethod = null;
        $this->strquerystring = null;
        $this->strpostdata = null;
        $this->strhttpuseragent = null;
        $this->strremoteaddr = null;
        $this->strhttpreferer = null;
        $this->strsessionid = null;
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
        return (string) $this->exportTo(SecWebpagetrackingPeer::DEFAULT_STRING_FORMAT);
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
