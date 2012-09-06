<?php


/**
 * Base class that represents a row from the 'SYS_FrmElement' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysFrmelement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysFrmelementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysFrmelementPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the frmelement_id field.
     * @var        string
     */
    protected $frmelement_id;

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
     * The value for the strextends field.
     * @var        string
     */
    protected $strextends;

    /**
     * The value for the strincludes field.
     * @var        string
     */
    protected $strincludes;

    /**
     * The value for the strvariables field.
     * @var        string
     */
    protected $strvariables;

    /**
     * The value for the strconstructor field.
     * @var        string
     */
    protected $strconstructor;

    /**
     * The value for the strconstructorargs field.
     * @var        string
     */
    protected $strconstructorargs;

    /**
     * The value for the strgethtml field.
     * @var        string
     */
    protected $strgethtml;

    /**
     * The value for the strgethtmlrow field.
     * @var        string
     */
    protected $strgethtmlrow;

    /**
     * The value for the strgetvalue field.
     * @var        string
     */
    protected $strgetvalue;

    /**
     * The value for the strsetvalue field.
     * @var        string
     */
    protected $strsetvalue;

    /**
     * The value for the strgetscripts field.
     * @var        string
     */
    protected $strgetscripts;

    /**
     * The value for the strothercode field.
     * @var        string
     */
    protected $strothercode;

    /**
     * The value for the strparameters field.
     * @var        string
     */
    protected $strparameters;

    /**
     * The value for the strparamarray field.
     * @var        string
     */
    protected $strparamarray;

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
     * Get the [frmelement_id] column value.
     *
     * @return string
     */
    public function getFrmelementId()
    {
        return $this->frmelement_id;
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
     * Get the [strextends] column value.
     *
     * @return string
     */
    public function getExtends()
    {
        return $this->strextends;
    }

    /**
     * Get the [strincludes] column value.
     *
     * @return string
     */
    public function getIncludes()
    {
        return $this->strincludes;
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
     * Get the [strconstructor] column value.
     *
     * @return string
     */
    public function getConstructor()
    {
        return $this->strconstructor;
    }

    /**
     * Get the [strconstructorargs] column value.
     *
     * @return string
     */
    public function getConstructorargs()
    {
        return $this->strconstructorargs;
    }

    /**
     * Get the [strgethtml] column value.
     *
     * @return string
     */
    public function getGethtml()
    {
        return $this->strgethtml;
    }

    /**
     * Get the [strgethtmlrow] column value.
     *
     * @return string
     */
    public function getGethtmlrow()
    {
        return $this->strgethtmlrow;
    }

    /**
     * Get the [strgetvalue] column value.
     *
     * @return string
     */
    public function getGetvalue()
    {
        return $this->strgetvalue;
    }

    /**
     * Get the [strsetvalue] column value.
     *
     * @return string
     */
    public function getSetvalue()
    {
        return $this->strsetvalue;
    }

    /**
     * Get the [strgetscripts] column value.
     *
     * @return string
     */
    public function getGetscripts()
    {
        return $this->strgetscripts;
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
     * Get the [strparameters] column value.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->strparameters;
    }

    /**
     * Get the [strparamarray] column value.
     *
     * @return string
     */
    public function getParamarray()
    {
        return $this->strparamarray;
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
     * Set the value of [frmelement_id] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setFrmelementId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->frmelement_id !== $v) {
            $this->frmelement_id = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::FRMELEMENT_ID;
        }


        return $this;
    } // setFrmelementId()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [strclassname] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setClassname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strclassname !== $v) {
            $this->strclassname = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRCLASSNAME;
        }


        return $this;
    } // setClassname()

    /**
     * Set the value of [strextends] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setExtends($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strextends !== $v) {
            $this->strextends = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STREXTENDS;
        }


        return $this;
    } // setExtends()

    /**
     * Set the value of [strincludes] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setIncludes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strincludes !== $v) {
            $this->strincludes = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRINCLUDES;
        }


        return $this;
    } // setIncludes()

    /**
     * Set the value of [strvariables] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setVariables($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strvariables !== $v) {
            $this->strvariables = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRVARIABLES;
        }


        return $this;
    } // setVariables()

    /**
     * Set the value of [strconstructor] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setConstructor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strconstructor !== $v) {
            $this->strconstructor = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRCONSTRUCTOR;
        }


        return $this;
    } // setConstructor()

    /**
     * Set the value of [strconstructorargs] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setConstructorargs($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strconstructorargs !== $v) {
            $this->strconstructorargs = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRCONSTRUCTORARGS;
        }


        return $this;
    } // setConstructorargs()

    /**
     * Set the value of [strgethtml] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setGethtml($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strgethtml !== $v) {
            $this->strgethtml = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRGETHTML;
        }


        return $this;
    } // setGethtml()

    /**
     * Set the value of [strgethtmlrow] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setGethtmlrow($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strgethtmlrow !== $v) {
            $this->strgethtmlrow = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRGETHTMLROW;
        }


        return $this;
    } // setGethtmlrow()

    /**
     * Set the value of [strgetvalue] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setGetvalue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strgetvalue !== $v) {
            $this->strgetvalue = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRGETVALUE;
        }


        return $this;
    } // setGetvalue()

    /**
     * Set the value of [strsetvalue] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setSetvalue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strsetvalue !== $v) {
            $this->strsetvalue = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRSETVALUE;
        }


        return $this;
    } // setSetvalue()

    /**
     * Set the value of [strgetscripts] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setGetscripts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strgetscripts !== $v) {
            $this->strgetscripts = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRGETSCRIPTS;
        }


        return $this;
    } // setGetscripts()

    /**
     * Set the value of [strothercode] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setOthercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strothercode !== $v) {
            $this->strothercode = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STROTHERCODE;
        }


        return $this;
    } // setOthercode()

    /**
     * Set the value of [strparameters] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setParameters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strparameters !== $v) {
            $this->strparameters = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRPARAMETERS;
        }


        return $this;
    } // setParameters()

    /**
     * Set the value of [strparamarray] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setParamarray($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strparamarray !== $v) {
            $this->strparamarray = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::STRPARAMARRAY;
        }


        return $this;
    } // setParamarray()

    /**
     * Set the value of [dbversionid] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setDbversionid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dbversionid !== $v) {
            $this->dbversionid = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::DBVERSIONID;
        }


        return $this;
    } // setDbversionid()

    /**
     * Set the value of [blnactive] column.
     *
     * @param int $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnactive !== $v) {
            $this->blnactive = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::BLNACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Set the value of [intmodifiedby] column.
     *
     * @param string $v new value
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setModifiedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intmodifiedby !== $v) {
            $this->intmodifiedby = $v;
            $this->modifiedColumns[] = SysFrmelementPeer::INTMODIFIEDBY;
        }


        return $this;
    } // setModifiedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysFrmelementPeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Sets the value of [dtmodifieddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysFrmelement The current object (for fluent API support)
     */
    public function setModifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtmodifieddate !== null && $tmpDt = new DateTime($this->dtmodifieddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SysFrmelementPeer::DTMODIFIEDDATE;
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

            $this->frmelement_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->strname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strclassname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strextends = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strincludes = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->strvariables = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->strconstructor = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->strconstructorargs = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->strgethtml = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->strgethtmlrow = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->strgetvalue = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->strsetvalue = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->strgetscripts = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->strothercode = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->strparameters = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->strparamarray = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->dbversionid = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->blnactive = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->intcreatedby = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->intmodifiedby = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->dtcreateddate = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->dtmodifieddate = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 22; // 22 = SysFrmelementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysFrmelement object", $e);
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
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysFrmelementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysFrmelementQuery::create()
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
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysFrmelementPeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
                if (!$this->isColumnModified(SysFrmelementPeer::DTMODIFIEDDATE)) {
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
                if ($this->isModified() && !$this->isColumnModified(SysFrmelementPeer::DTMODIFIEDDATE)) {
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

                SysFrmelementPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = SysFrmelementPeer::FRMELEMENT_ID;
        if (null !== $this->frmelement_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysFrmelementPeer::FRMELEMENT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysFrmelementPeer::FRMELEMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`FRMELEMENT_ID`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRCLASSNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRCLASSNAME`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STREXTENDS)) {
            $modifiedColumns[':p' . $index++]  = '`STREXTENDS`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRINCLUDES)) {
            $modifiedColumns[':p' . $index++]  = '`STRINCLUDES`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRVARIABLES)) {
            $modifiedColumns[':p' . $index++]  = '`STRVARIABLES`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRCONSTRUCTOR)) {
            $modifiedColumns[':p' . $index++]  = '`STRCONSTRUCTOR`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRCONSTRUCTORARGS)) {
            $modifiedColumns[':p' . $index++]  = '`STRCONSTRUCTORARGS`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRGETHTML)) {
            $modifiedColumns[':p' . $index++]  = '`STRGETHTML`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRGETHTMLROW)) {
            $modifiedColumns[':p' . $index++]  = '`STRGETHTMLROW`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRGETVALUE)) {
            $modifiedColumns[':p' . $index++]  = '`STRGETVALUE`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRSETVALUE)) {
            $modifiedColumns[':p' . $index++]  = '`STRSETVALUE`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRGETSCRIPTS)) {
            $modifiedColumns[':p' . $index++]  = '`STRGETSCRIPTS`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STROTHERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`STROTHERCODE`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRPARAMETERS)) {
            $modifiedColumns[':p' . $index++]  = '`STRPARAMETERS`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::STRPARAMARRAY)) {
            $modifiedColumns[':p' . $index++]  = '`STRPARAMARRAY`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::DBVERSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`DBVERSIONID`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::BLNACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`BLNACTIVE`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::INTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTMODIFIEDBY`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }
        if ($this->isColumnModified(SysFrmelementPeer::DTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTMODIFIEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_FrmElement` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`FRMELEMENT_ID`':
                        $stmt->bindValue($identifier, $this->frmelement_id, PDO::PARAM_INT);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`STRCLASSNAME`':
                        $stmt->bindValue($identifier, $this->strclassname, PDO::PARAM_STR);
                        break;
                    case '`STREXTENDS`':
                        $stmt->bindValue($identifier, $this->strextends, PDO::PARAM_STR);
                        break;
                    case '`STRINCLUDES`':
                        $stmt->bindValue($identifier, $this->strincludes, PDO::PARAM_STR);
                        break;
                    case '`STRVARIABLES`':
                        $stmt->bindValue($identifier, $this->strvariables, PDO::PARAM_STR);
                        break;
                    case '`STRCONSTRUCTOR`':
                        $stmt->bindValue($identifier, $this->strconstructor, PDO::PARAM_STR);
                        break;
                    case '`STRCONSTRUCTORARGS`':
                        $stmt->bindValue($identifier, $this->strconstructorargs, PDO::PARAM_STR);
                        break;
                    case '`STRGETHTML`':
                        $stmt->bindValue($identifier, $this->strgethtml, PDO::PARAM_STR);
                        break;
                    case '`STRGETHTMLROW`':
                        $stmt->bindValue($identifier, $this->strgethtmlrow, PDO::PARAM_STR);
                        break;
                    case '`STRGETVALUE`':
                        $stmt->bindValue($identifier, $this->strgetvalue, PDO::PARAM_STR);
                        break;
                    case '`STRSETVALUE`':
                        $stmt->bindValue($identifier, $this->strsetvalue, PDO::PARAM_STR);
                        break;
                    case '`STRGETSCRIPTS`':
                        $stmt->bindValue($identifier, $this->strgetscripts, PDO::PARAM_STR);
                        break;
                    case '`STROTHERCODE`':
                        $stmt->bindValue($identifier, $this->strothercode, PDO::PARAM_STR);
                        break;
                    case '`STRPARAMETERS`':
                        $stmt->bindValue($identifier, $this->strparameters, PDO::PARAM_STR);
                        break;
                    case '`STRPARAMARRAY`':
                        $stmt->bindValue($identifier, $this->strparamarray, PDO::PARAM_STR);
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
        $this->setFrmelementId($pk);

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


            if (($retval = SysFrmelementPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SysFrmelementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFrmelementId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getClassname();
                break;
            case 3:
                return $this->getExtends();
                break;
            case 4:
                return $this->getIncludes();
                break;
            case 5:
                return $this->getVariables();
                break;
            case 6:
                return $this->getConstructor();
                break;
            case 7:
                return $this->getConstructorargs();
                break;
            case 8:
                return $this->getGethtml();
                break;
            case 9:
                return $this->getGethtmlrow();
                break;
            case 10:
                return $this->getGetvalue();
                break;
            case 11:
                return $this->getSetvalue();
                break;
            case 12:
                return $this->getGetscripts();
                break;
            case 13:
                return $this->getOthercode();
                break;
            case 14:
                return $this->getParameters();
                break;
            case 15:
                return $this->getParamarray();
                break;
            case 16:
                return $this->getDbversionid();
                break;
            case 17:
                return $this->getActive();
                break;
            case 18:
                return $this->getCreatedby();
                break;
            case 19:
                return $this->getModifiedby();
                break;
            case 20:
                return $this->getCreateddate();
                break;
            case 21:
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
        if (isset($alreadyDumpedObjects['SysFrmelement'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysFrmelement'][$this->getPrimaryKey()] = true;
        $keys = SysFrmelementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFrmelementId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getClassname(),
            $keys[3] => $this->getExtends(),
            $keys[4] => $this->getIncludes(),
            $keys[5] => $this->getVariables(),
            $keys[6] => $this->getConstructor(),
            $keys[7] => $this->getConstructorargs(),
            $keys[8] => $this->getGethtml(),
            $keys[9] => $this->getGethtmlrow(),
            $keys[10] => $this->getGetvalue(),
            $keys[11] => $this->getSetvalue(),
            $keys[12] => $this->getGetscripts(),
            $keys[13] => $this->getOthercode(),
            $keys[14] => $this->getParameters(),
            $keys[15] => $this->getParamarray(),
            $keys[16] => $this->getDbversionid(),
            $keys[17] => $this->getActive(),
            $keys[18] => $this->getCreatedby(),
            $keys[19] => $this->getModifiedby(),
            $keys[20] => $this->getCreateddate(),
            $keys[21] => $this->getModifieddate(),
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
        $pos = SysFrmelementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFrmelementId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setClassname($value);
                break;
            case 3:
                $this->setExtends($value);
                break;
            case 4:
                $this->setIncludes($value);
                break;
            case 5:
                $this->setVariables($value);
                break;
            case 6:
                $this->setConstructor($value);
                break;
            case 7:
                $this->setConstructorargs($value);
                break;
            case 8:
                $this->setGethtml($value);
                break;
            case 9:
                $this->setGethtmlrow($value);
                break;
            case 10:
                $this->setGetvalue($value);
                break;
            case 11:
                $this->setSetvalue($value);
                break;
            case 12:
                $this->setGetscripts($value);
                break;
            case 13:
                $this->setOthercode($value);
                break;
            case 14:
                $this->setParameters($value);
                break;
            case 15:
                $this->setParamarray($value);
                break;
            case 16:
                $this->setDbversionid($value);
                break;
            case 17:
                $this->setActive($value);
                break;
            case 18:
                $this->setCreatedby($value);
                break;
            case 19:
                $this->setModifiedby($value);
                break;
            case 20:
                $this->setCreateddate($value);
                break;
            case 21:
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
        $keys = SysFrmelementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFrmelementId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClassname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExtends($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIncludes($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVariables($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setConstructor($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setConstructorargs($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setGethtml($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGethtmlrow($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGetvalue($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSetvalue($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setGetscripts($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOthercode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setParameters($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setParamarray($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDbversionid($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setActive($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCreatedby($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setModifiedby($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setCreateddate($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setModifieddate($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);

        if ($this->isColumnModified(SysFrmelementPeer::FRMELEMENT_ID)) $criteria->add(SysFrmelementPeer::FRMELEMENT_ID, $this->frmelement_id);
        if ($this->isColumnModified(SysFrmelementPeer::STRNAME)) $criteria->add(SysFrmelementPeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysFrmelementPeer::STRCLASSNAME)) $criteria->add(SysFrmelementPeer::STRCLASSNAME, $this->strclassname);
        if ($this->isColumnModified(SysFrmelementPeer::STREXTENDS)) $criteria->add(SysFrmelementPeer::STREXTENDS, $this->strextends);
        if ($this->isColumnModified(SysFrmelementPeer::STRINCLUDES)) $criteria->add(SysFrmelementPeer::STRINCLUDES, $this->strincludes);
        if ($this->isColumnModified(SysFrmelementPeer::STRVARIABLES)) $criteria->add(SysFrmelementPeer::STRVARIABLES, $this->strvariables);
        if ($this->isColumnModified(SysFrmelementPeer::STRCONSTRUCTOR)) $criteria->add(SysFrmelementPeer::STRCONSTRUCTOR, $this->strconstructor);
        if ($this->isColumnModified(SysFrmelementPeer::STRCONSTRUCTORARGS)) $criteria->add(SysFrmelementPeer::STRCONSTRUCTORARGS, $this->strconstructorargs);
        if ($this->isColumnModified(SysFrmelementPeer::STRGETHTML)) $criteria->add(SysFrmelementPeer::STRGETHTML, $this->strgethtml);
        if ($this->isColumnModified(SysFrmelementPeer::STRGETHTMLROW)) $criteria->add(SysFrmelementPeer::STRGETHTMLROW, $this->strgethtmlrow);
        if ($this->isColumnModified(SysFrmelementPeer::STRGETVALUE)) $criteria->add(SysFrmelementPeer::STRGETVALUE, $this->strgetvalue);
        if ($this->isColumnModified(SysFrmelementPeer::STRSETVALUE)) $criteria->add(SysFrmelementPeer::STRSETVALUE, $this->strsetvalue);
        if ($this->isColumnModified(SysFrmelementPeer::STRGETSCRIPTS)) $criteria->add(SysFrmelementPeer::STRGETSCRIPTS, $this->strgetscripts);
        if ($this->isColumnModified(SysFrmelementPeer::STROTHERCODE)) $criteria->add(SysFrmelementPeer::STROTHERCODE, $this->strothercode);
        if ($this->isColumnModified(SysFrmelementPeer::STRPARAMETERS)) $criteria->add(SysFrmelementPeer::STRPARAMETERS, $this->strparameters);
        if ($this->isColumnModified(SysFrmelementPeer::STRPARAMARRAY)) $criteria->add(SysFrmelementPeer::STRPARAMARRAY, $this->strparamarray);
        if ($this->isColumnModified(SysFrmelementPeer::DBVERSIONID)) $criteria->add(SysFrmelementPeer::DBVERSIONID, $this->dbversionid);
        if ($this->isColumnModified(SysFrmelementPeer::BLNACTIVE)) $criteria->add(SysFrmelementPeer::BLNACTIVE, $this->blnactive);
        if ($this->isColumnModified(SysFrmelementPeer::INTCREATEDBY)) $criteria->add(SysFrmelementPeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysFrmelementPeer::INTMODIFIEDBY)) $criteria->add(SysFrmelementPeer::INTMODIFIEDBY, $this->intmodifiedby);
        if ($this->isColumnModified(SysFrmelementPeer::DTCREATEDDATE)) $criteria->add(SysFrmelementPeer::DTCREATEDDATE, $this->dtcreateddate);
        if ($this->isColumnModified(SysFrmelementPeer::DTMODIFIEDDATE)) $criteria->add(SysFrmelementPeer::DTMODIFIEDDATE, $this->dtmodifieddate);

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
        $criteria = new Criteria(SysFrmelementPeer::DATABASE_NAME);
        $criteria->add(SysFrmelementPeer::FRMELEMENT_ID, $this->frmelement_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getFrmelementId();
    }

    /**
     * Generic method to set the primary key (frmelement_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFrmelementId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFrmelementId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysFrmelement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setClassname($this->getClassname());
        $copyObj->setExtends($this->getExtends());
        $copyObj->setIncludes($this->getIncludes());
        $copyObj->setVariables($this->getVariables());
        $copyObj->setConstructor($this->getConstructor());
        $copyObj->setConstructorargs($this->getConstructorargs());
        $copyObj->setGethtml($this->getGethtml());
        $copyObj->setGethtmlrow($this->getGethtmlrow());
        $copyObj->setGetvalue($this->getGetvalue());
        $copyObj->setSetvalue($this->getSetvalue());
        $copyObj->setGetscripts($this->getGetscripts());
        $copyObj->setOthercode($this->getOthercode());
        $copyObj->setParameters($this->getParameters());
        $copyObj->setParamarray($this->getParamarray());
        $copyObj->setDbversionid($this->getDbversionid());
        $copyObj->setActive($this->getActive());
        $copyObj->setCreatedby($this->getCreatedby());
        $copyObj->setModifiedby($this->getModifiedby());
        $copyObj->setCreateddate($this->getCreateddate());
        $copyObj->setModifieddate($this->getModifieddate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFrmelementId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SysFrmelement Clone of current object.
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
     * @return SysFrmelementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysFrmelementPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->frmelement_id = null;
        $this->strname = null;
        $this->strclassname = null;
        $this->strextends = null;
        $this->strincludes = null;
        $this->strvariables = null;
        $this->strconstructor = null;
        $this->strconstructorargs = null;
        $this->strgethtml = null;
        $this->strgethtmlrow = null;
        $this->strgetvalue = null;
        $this->strsetvalue = null;
        $this->strgetscripts = null;
        $this->strothercode = null;
        $this->strparameters = null;
        $this->strparamarray = null;
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
        return (string) $this->exportTo(SysFrmelementPeer::DEFAULT_STRING_FORMAT);
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
     * @return     SysFrmelement The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = SysFrmelementPeer::DTMODIFIEDDATE;

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
