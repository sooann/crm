<?php


/**
 * Base class that represents a row from the 'SYS_WebpageColumn' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysWebpagecolumn extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysWebpagecolumnPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysWebpagecolumnPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the webpagecolumn_id field.
     * @var        string
     */
    protected $webpagecolumn_id;

    /**
     * The value for the webpage_id field.
     * @var        string
     */
    protected $webpage_id;

    /**
     * The value for the intqueryorder field.
     * @var        int
     */
    protected $intqueryorder;

    /**
     * The value for the strquerycolumn field.
     * @var        string
     */
    protected $strquerycolumn;

    /**
     * The value for the strname field.
     * @var        string
     */
    protected $strname;

    /**
     * The value for the intorder field.
     * @var        int
     */
    protected $intorder;

    /**
     * The value for the blndisplay field.
     * @var        int
     */
    protected $blndisplay;

    /**
     * The value for the blnhidden field.
     * @var        int
     */
    protected $blnhidden;

    /**
     * The value for the blnhide field.
     * @var        int
     */
    protected $blnhide;

    /**
     * The value for the blnsearch field.
     * @var        int
     */
    protected $blnsearch;

    /**
     * The value for the blnprikey field.
     * @var        int
     */
    protected $blnprikey;

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
     * @var        SysWebpage
     */
    protected $aSysWebpage;

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
     * Get the [webpagecolumn_id] column value.
     *
     * @return string
     */
    public function getWebpagecolumnId()
    {
        return $this->webpagecolumn_id;
    }

    /**
     * Get the [webpage_id] column value.
     *
     * @return string
     */
    public function getWebpageId()
    {
        return $this->webpage_id;
    }

    /**
     * Get the [intqueryorder] column value.
     *
     * @return int
     */
    public function getQueryorder()
    {
        return $this->intqueryorder;
    }

    /**
     * Get the [strquerycolumn] column value.
     *
     * @return string
     */
    public function getQuerycolumn()
    {
        return $this->strquerycolumn;
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
     * Get the [intorder] column value.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->intorder;
    }

    /**
     * Get the [blndisplay] column value.
     *
     * @return int
     */
    public function getDisplay()
    {
        return $this->blndisplay;
    }

    /**
     * Get the [blnhidden] column value.
     *
     * @return int
     */
    public function getHidden()
    {
        return $this->blnhidden;
    }

    /**
     * Get the [blnhide] column value.
     *
     * @return int
     */
    public function getHide()
    {
        return $this->blnhide;
    }

    /**
     * Get the [blnsearch] column value.
     *
     * @return int
     */
    public function getSearch()
    {
        return $this->blnsearch;
    }

    /**
     * Get the [blnprikey] column value.
     *
     * @return int
     */
    public function getPrikey()
    {
        return $this->blnprikey;
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
     * Set the value of [webpagecolumn_id] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setWebpagecolumnId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->webpagecolumn_id !== $v) {
            $this->webpagecolumn_id = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::WEBPAGECOLUMN_ID;
        }


        return $this;
    } // setWebpagecolumnId()

    /**
     * Set the value of [webpage_id] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setWebpageId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->webpage_id !== $v) {
            $this->webpage_id = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::WEBPAGE_ID;
        }

        if ($this->aSysWebpage !== null && $this->aSysWebpage->getWebpageId() !== $v) {
            $this->aSysWebpage = null;
        }


        return $this;
    } // setWebpageId()

    /**
     * Set the value of [intqueryorder] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setQueryorder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intqueryorder !== $v) {
            $this->intqueryorder = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::INTQUERYORDER;
        }


        return $this;
    } // setQueryorder()

    /**
     * Set the value of [strquerycolumn] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setQuerycolumn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strquerycolumn !== $v) {
            $this->strquerycolumn = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::STRQUERYCOLUMN;
        }


        return $this;
    } // setQuerycolumn()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [intorder] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intorder !== $v) {
            $this->intorder = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::INTORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [blndisplay] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setDisplay($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blndisplay !== $v) {
            $this->blndisplay = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::BLNDISPLAY;
        }


        return $this;
    } // setDisplay()

    /**
     * Set the value of [blnhidden] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setHidden($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnhidden !== $v) {
            $this->blnhidden = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::BLNHIDDEN;
        }


        return $this;
    } // setHidden()

    /**
     * Set the value of [blnhide] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setHide($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnhide !== $v) {
            $this->blnhide = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::BLNHIDE;
        }


        return $this;
    } // setHide()

    /**
     * Set the value of [blnsearch] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setSearch($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnsearch !== $v) {
            $this->blnsearch = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::BLNSEARCH;
        }


        return $this;
    } // setSearch()

    /**
     * Set the value of [blnprikey] column.
     *
     * @param int $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setPrikey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnprikey !== $v) {
            $this->blnprikey = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::BLNPRIKEY;
        }


        return $this;
    } // setPrikey()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Set the value of [intmodifiedby] column.
     *
     * @param string $v new value
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setModifiedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intmodifiedby !== $v) {
            $this->intmodifiedby = $v;
            $this->modifiedColumns[] = SysWebpagecolumnPeer::INTMODIFIEDBY;
        }


        return $this;
    } // setModifiedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysWebpagecolumnPeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Sets the value of [dtmodifieddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysWebpagecolumn The current object (for fluent API support)
     */
    public function setModifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtmodifieddate !== null && $tmpDt = new DateTime($this->dtmodifieddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SysWebpagecolumnPeer::DTMODIFIEDDATE;
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

            $this->webpagecolumn_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->webpage_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->intqueryorder = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->strquerycolumn = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intorder = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->blndisplay = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->blnhidden = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->blnhide = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->blnsearch = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->blnprikey = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->intcreatedby = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->intmodifiedby = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->dtcreateddate = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->dtmodifieddate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = SysWebpagecolumnPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysWebpagecolumn object", $e);
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

        if ($this->aSysWebpage !== null && $this->webpage_id !== $this->aSysWebpage->getWebpageId()) {
            $this->aSysWebpage = null;
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
            $con = Propel::getConnection(SysWebpagecolumnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysWebpagecolumnPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSysWebpage = null;
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
            $con = Propel::getConnection(SysWebpagecolumnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysWebpagecolumnQuery::create()
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
            $con = Propel::getConnection(SysWebpagecolumnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysWebpagecolumnPeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
                if (!$this->isColumnModified(SysWebpagecolumnPeer::DTMODIFIEDDATE)) {
                    $this->setModifieddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setModifiedby($_SESSION['intUserURN']);
                    }
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SysWebpagecolumnPeer::DTMODIFIEDDATE)) {
                    $this->setModifieddate(time());
                    $this->setModifiedby($_SESSION['intUserURN']);
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

                SysWebpagecolumnPeer::addInstanceToPool($this);
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

            if ($this->aSysWebpage !== null) {
                if ($this->aSysWebpage->isModified() || $this->aSysWebpage->isNew()) {
                    $affectedRows += $this->aSysWebpage->save($con);
                }
                $this->setSysWebpage($this->aSysWebpage);
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

        $this->modifiedColumns[] = SysWebpagecolumnPeer::WEBPAGECOLUMN_ID;
        if (null !== $this->webpagecolumn_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysWebpagecolumnPeer::WEBPAGECOLUMN_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WEBPAGECOLUMN_ID`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::WEBPAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WEBPAGE_ID`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTQUERYORDER)) {
            $modifiedColumns[':p' . $index++]  = '`INTQUERYORDER`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::STRQUERYCOLUMN)) {
            $modifiedColumns[':p' . $index++]  = '`STRQUERYCOLUMN`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTORDER)) {
            $modifiedColumns[':p' . $index++]  = '`INTORDER`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNDISPLAY)) {
            $modifiedColumns[':p' . $index++]  = '`BLNDISPLAY`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNHIDDEN)) {
            $modifiedColumns[':p' . $index++]  = '`BLNHIDDEN`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNHIDE)) {
            $modifiedColumns[':p' . $index++]  = '`BLNHIDE`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNSEARCH)) {
            $modifiedColumns[':p' . $index++]  = '`BLNSEARCH`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNPRIKEY)) {
            $modifiedColumns[':p' . $index++]  = '`BLNPRIKEY`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTMODIFIEDBY`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }
        if ($this->isColumnModified(SysWebpagecolumnPeer::DTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTMODIFIEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_WebpageColumn` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`WEBPAGECOLUMN_ID`':
                        $stmt->bindValue($identifier, $this->webpagecolumn_id, PDO::PARAM_INT);
                        break;
                    case '`WEBPAGE_ID`':
                        $stmt->bindValue($identifier, $this->webpage_id, PDO::PARAM_INT);
                        break;
                    case '`INTQUERYORDER`':
                        $stmt->bindValue($identifier, $this->intqueryorder, PDO::PARAM_INT);
                        break;
                    case '`STRQUERYCOLUMN`':
                        $stmt->bindValue($identifier, $this->strquerycolumn, PDO::PARAM_STR);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`INTORDER`':
                        $stmt->bindValue($identifier, $this->intorder, PDO::PARAM_INT);
                        break;
                    case '`BLNDISPLAY`':
                        $stmt->bindValue($identifier, $this->blndisplay, PDO::PARAM_INT);
                        break;
                    case '`BLNHIDDEN`':
                        $stmt->bindValue($identifier, $this->blnhidden, PDO::PARAM_INT);
                        break;
                    case '`BLNHIDE`':
                        $stmt->bindValue($identifier, $this->blnhide, PDO::PARAM_INT);
                        break;
                    case '`BLNSEARCH`':
                        $stmt->bindValue($identifier, $this->blnsearch, PDO::PARAM_INT);
                        break;
                    case '`BLNPRIKEY`':
                        $stmt->bindValue($identifier, $this->blnprikey, PDO::PARAM_INT);
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
        $this->setWebpagecolumnId($pk);

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

            if ($this->aSysWebpage !== null) {
                if (!$this->aSysWebpage->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSysWebpage->getValidationFailures());
                }
            }


            if (($retval = SysWebpagecolumnPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SysWebpagecolumnPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getWebpagecolumnId();
                break;
            case 1:
                return $this->getWebpageId();
                break;
            case 2:
                return $this->getQueryorder();
                break;
            case 3:
                return $this->getQuerycolumn();
                break;
            case 4:
                return $this->getName();
                break;
            case 5:
                return $this->getOrder();
                break;
            case 6:
                return $this->getDisplay();
                break;
            case 7:
                return $this->getHidden();
                break;
            case 8:
                return $this->getHide();
                break;
            case 9:
                return $this->getSearch();
                break;
            case 10:
                return $this->getPrikey();
                break;
            case 11:
                return $this->getCreatedby();
                break;
            case 12:
                return $this->getModifiedby();
                break;
            case 13:
                return $this->getCreateddate();
                break;
            case 14:
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
        if (isset($alreadyDumpedObjects['SysWebpagecolumn'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysWebpagecolumn'][$this->getPrimaryKey()] = true;
        $keys = SysWebpagecolumnPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWebpagecolumnId(),
            $keys[1] => $this->getWebpageId(),
            $keys[2] => $this->getQueryorder(),
            $keys[3] => $this->getQuerycolumn(),
            $keys[4] => $this->getName(),
            $keys[5] => $this->getOrder(),
            $keys[6] => $this->getDisplay(),
            $keys[7] => $this->getHidden(),
            $keys[8] => $this->getHide(),
            $keys[9] => $this->getSearch(),
            $keys[10] => $this->getPrikey(),
            $keys[11] => $this->getCreatedby(),
            $keys[12] => $this->getModifiedby(),
            $keys[13] => $this->getCreateddate(),
            $keys[14] => $this->getModifieddate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aSysWebpage) {
                $result['SysWebpage'] = $this->aSysWebpage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SysWebpagecolumnPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setWebpagecolumnId($value);
                break;
            case 1:
                $this->setWebpageId($value);
                break;
            case 2:
                $this->setQueryorder($value);
                break;
            case 3:
                $this->setQuerycolumn($value);
                break;
            case 4:
                $this->setName($value);
                break;
            case 5:
                $this->setOrder($value);
                break;
            case 6:
                $this->setDisplay($value);
                break;
            case 7:
                $this->setHidden($value);
                break;
            case 8:
                $this->setHide($value);
                break;
            case 9:
                $this->setSearch($value);
                break;
            case 10:
                $this->setPrikey($value);
                break;
            case 11:
                $this->setCreatedby($value);
                break;
            case 12:
                $this->setModifiedby($value);
                break;
            case 13:
                $this->setCreateddate($value);
                break;
            case 14:
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
        $keys = SysWebpagecolumnPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setWebpagecolumnId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setWebpageId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setQueryorder($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setQuerycolumn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrder($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDisplay($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHidden($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHide($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSearch($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrikey($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCreatedby($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setModifiedby($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCreateddate($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setModifieddate($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysWebpagecolumnPeer::DATABASE_NAME);

        if ($this->isColumnModified(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID)) $criteria->add(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $this->webpagecolumn_id);
        if ($this->isColumnModified(SysWebpagecolumnPeer::WEBPAGE_ID)) $criteria->add(SysWebpagecolumnPeer::WEBPAGE_ID, $this->webpage_id);
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTQUERYORDER)) $criteria->add(SysWebpagecolumnPeer::INTQUERYORDER, $this->intqueryorder);
        if ($this->isColumnModified(SysWebpagecolumnPeer::STRQUERYCOLUMN)) $criteria->add(SysWebpagecolumnPeer::STRQUERYCOLUMN, $this->strquerycolumn);
        if ($this->isColumnModified(SysWebpagecolumnPeer::STRNAME)) $criteria->add(SysWebpagecolumnPeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTORDER)) $criteria->add(SysWebpagecolumnPeer::INTORDER, $this->intorder);
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNDISPLAY)) $criteria->add(SysWebpagecolumnPeer::BLNDISPLAY, $this->blndisplay);
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNHIDDEN)) $criteria->add(SysWebpagecolumnPeer::BLNHIDDEN, $this->blnhidden);
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNHIDE)) $criteria->add(SysWebpagecolumnPeer::BLNHIDE, $this->blnhide);
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNSEARCH)) $criteria->add(SysWebpagecolumnPeer::BLNSEARCH, $this->blnsearch);
        if ($this->isColumnModified(SysWebpagecolumnPeer::BLNPRIKEY)) $criteria->add(SysWebpagecolumnPeer::BLNPRIKEY, $this->blnprikey);
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTCREATEDBY)) $criteria->add(SysWebpagecolumnPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysWebpagecolumnPeer::INTMODIFIEDBY)) $criteria->add(SysWebpagecolumnPeer::INTMODIFIEDBY, $this->intmodifiedby);
        if ($this->isColumnModified(SysWebpagecolumnPeer::DTCREATEDDATE)) $criteria->add(SysWebpagecolumnPeer::DTCREATEDDATE, $this->dtcreateddate);
        if ($this->isColumnModified(SysWebpagecolumnPeer::DTMODIFIEDDATE)) $criteria->add(SysWebpagecolumnPeer::DTMODIFIEDDATE, $this->dtmodifieddate);

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
        $criteria = new Criteria(SysWebpagecolumnPeer::DATABASE_NAME);
        $criteria->add(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $this->webpagecolumn_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getWebpagecolumnId();
    }

    /**
     * Generic method to set the primary key (webpagecolumn_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWebpagecolumnId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getWebpagecolumnId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysWebpagecolumn (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setWebpageId($this->getWebpageId());
        $copyObj->setQueryorder($this->getQueryorder());
        $copyObj->setQuerycolumn($this->getQuerycolumn());
        $copyObj->setName($this->getName());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setDisplay($this->getDisplay());
        $copyObj->setHidden($this->getHidden());
        $copyObj->setHide($this->getHide());
        $copyObj->setSearch($this->getSearch());
        $copyObj->setPrikey($this->getPrikey());
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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWebpagecolumnId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SysWebpagecolumn Clone of current object.
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
     * @return SysWebpagecolumnPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysWebpagecolumnPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SysWebpage object.
     *
     * @param             SysWebpage $v
     * @return SysWebpagecolumn The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSysWebpage(SysWebpage $v = null)
    {
        if ($v === null) {
            $this->setWebpageId(NULL);
        } else {
            $this->setWebpageId($v->getWebpageId());
        }

        $this->aSysWebpage = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SysWebpage object, it will not be re-added.
        if ($v !== null) {
            $v->addSysWebpagecolumn($this);
        }


        return $this;
    }


    /**
     * Get the associated SysWebpage object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return SysWebpage The associated SysWebpage object.
     * @throws PropelException
     */
    public function getSysWebpage(PropelPDO $con = null)
    {
        if ($this->aSysWebpage === null && (($this->webpage_id !== "" && $this->webpage_id !== null))) {
            $this->aSysWebpage = SysWebpageQuery::create()->findPk($this->webpage_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSysWebpage->addSysWebpagecolumns($this);
             */
        }

        return $this->aSysWebpage;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->webpagecolumn_id = null;
        $this->webpage_id = null;
        $this->intqueryorder = null;
        $this->strquerycolumn = null;
        $this->strname = null;
        $this->intorder = null;
        $this->blndisplay = null;
        $this->blnhidden = null;
        $this->blnhide = null;
        $this->blnsearch = null;
        $this->blnprikey = null;
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

        $this->aSysWebpage = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SysWebpagecolumnPeer::DEFAULT_STRING_FORMAT);
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
     * @return     SysWebpagecolumn The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = SysWebpagecolumnPeer::DTMODIFIEDDATE;

        return $this;
    }

}
