<?php


/**
 * Base class that represents a row from the 'SYS_Webpage' table.
 *
 *
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysWebpage extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SysWebpagePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SysWebpagePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the webpage_id field.
     * @var        string
     */
    protected $webpage_id;

    /**
     * The value for the webtemplate_id field.
     * @var        string
     */
    protected $webtemplate_id;

    /**
     * The value for the strlocation field.
     * @var        string
     */
    protected $strlocation;

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
     * The value for the straction field.
     * @var        string
     */
    protected $straction;

    /**
     * The value for the strrequiredparameters field.
     * @var        string
     */
    protected $strrequiredparameters;

    /**
     * The value for the strwebpagefactory field.
     * @var        string
     */
    protected $strwebpagefactory;

    /**
     * The value for the strhtml field.
     * @var        string
     */
    protected $strhtml;

    /**
     * The value for the strcommonjs field.
     * @var        string
     */
    protected $strcommonjs;

    /**
     * The value for the clonefishparentid field.
     * @var        string
     */
    protected $clonefishparentid;

    /**
     * The value for the strclonefishconfig field.
     * @var        string
     */
    protected $strclonefishconfig;

    /**
     * The value for the strormclass field.
     * @var        string
     */
    protected $strormclass;

    /**
     * The value for the strsuccredirect field.
     * @var        string
     */
    protected $strsuccredirect;

    /**
     * The value for the sqlquery_id field.
     * @var        string
     */
    protected $sqlquery_id;

    /**
     * The value for the strgridoptions field.
     * @var        string
     */
    protected $strgridoptions;

    /**
     * The value for the streditbaselinkurl field.
     * @var        string
     */
    protected $streditbaselinkurl;

    /**
     * The value for the streditcustomfuncname field.
     * @var        string
     */
    protected $streditcustomfuncname;

    /**
     * The value for the streditcustomfunction field.
     * @var        string
     */
    protected $streditcustomfunction;

    /**
     * The value for the strmultiselectcustomfunction field.
     * @var        string
     */
    protected $strmultiselectcustomfunction;

    /**
     * The value for the blnactive field.
     * @var        int
     */
    protected $blnactive;

    /**
     * The value for the dbversionid field.
     * @var        int
     */
    protected $dbversionid;

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
     * @var        SysSqlquery
     */
    protected $aSysSqlquery;

    /**
     * @var        SysWebtemplate
     */
    protected $aSysWebtemplate;

    /**
     * @var        PropelObjectCollection|SysWebpagecolumn[] Collection to store aggregation of SysWebpagecolumn objects.
     */
    protected $collSysWebpagecolumns;
    protected $collSysWebpagecolumnsPartial;

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
    protected $sysWebpagecolumnsScheduledForDeletion = null;

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
     * Get the [webtemplate_id] column value.
     *
     * @return string
     */
    public function getWebtemplateId()
    {
        return $this->webtemplate_id;
    }

    /**
     * Get the [strlocation] column value.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->strlocation;
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
     * Get the [straction] column value.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->straction;
    }

    /**
     * Get the [strrequiredparameters] column value.
     *
     * @return string
     */
    public function getRequiredparameters()
    {
        return $this->strrequiredparameters;
    }

    /**
     * Get the [strwebpagefactory] column value.
     *
     * @return string
     */
    public function getWebpagefactory()
    {
        return $this->strwebpagefactory;
    }

    /**
     * Get the [strhtml] column value.
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->strhtml;
    }

    /**
     * Get the [strcommonjs] column value.
     *
     * @return string
     */
    public function getCommonjs()
    {
        return $this->strcommonjs;
    }

    /**
     * Get the [clonefishparentid] column value.
     *
     * @return string
     */
    public function getClonefishparentid()
    {
        return $this->clonefishparentid;
    }

    /**
     * Get the [strclonefishconfig] column value.
     *
     * @return string
     */
    public function getClonefishconfig()
    {
        return $this->strclonefishconfig;
    }

    /**
     * Get the [strormclass] column value.
     *
     * @return string
     */
    public function getOrmclass()
    {
        return $this->strormclass;
    }

    /**
     * Get the [strsuccredirect] column value.
     *
     * @return string
     */
    public function getSuccredirect()
    {
        return $this->strsuccredirect;
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
     * Get the [strgridoptions] column value.
     *
     * @return string
     */
    public function getGridoptions()
    {
        return $this->strgridoptions;
    }

    /**
     * Get the [streditbaselinkurl] column value.
     *
     * @return string
     */
    public function getEditbaselinkurl()
    {
        return $this->streditbaselinkurl;
    }

    /**
     * Get the [streditcustomfuncname] column value.
     *
     * @return string
     */
    public function getEditcustomfuncname()
    {
        return $this->streditcustomfuncname;
    }

    /**
     * Get the [streditcustomfunction] column value.
     *
     * @return string
     */
    public function getEditcustomfunction()
    {
        return $this->streditcustomfunction;
    }

    /**
     * Get the [strmultiselectcustomfunction] column value.
     *
     * @return string
     */
    public function getMultiselectcustomfunction()
    {
        return $this->strmultiselectcustomfunction;
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
     * Get the [dbversionid] column value.
     *
     * @return int
     */
    public function getDbversionid()
    {
        return $this->dbversionid;
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
     * Set the value of [webpage_id] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setWebpageId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->webpage_id !== $v) {
            $this->webpage_id = $v;
            $this->modifiedColumns[] = SysWebpagePeer::WEBPAGE_ID;
        }


        return $this;
    } // setWebpageId()

    /**
     * Set the value of [webtemplate_id] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setWebtemplateId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->webtemplate_id !== $v) {
            $this->webtemplate_id = $v;
            $this->modifiedColumns[] = SysWebpagePeer::WEBTEMPLATE_ID;
        }

        if ($this->aSysWebtemplate !== null && $this->aSysWebtemplate->getWebtemplateId() !== $v) {
            $this->aSysWebtemplate = null;
        }


        return $this;
    } // setWebtemplateId()

    /**
     * Set the value of [strlocation] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setLocation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strlocation !== $v) {
            $this->strlocation = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRLOCATION;
        }


        return $this;
    } // setLocation()

    /**
     * Set the value of [strname] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strname !== $v) {
            $this->strname = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRNAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [strdescription] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strdescription !== $v) {
            $this->strdescription = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRDESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [straction] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setAction($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->straction !== $v) {
            $this->straction = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRACTION;
        }


        return $this;
    } // setAction()

    /**
     * Set the value of [strrequiredparameters] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setRequiredparameters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strrequiredparameters !== $v) {
            $this->strrequiredparameters = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRREQUIREDPARAMETERS;
        }


        return $this;
    } // setRequiredparameters()

    /**
     * Set the value of [strwebpagefactory] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setWebpagefactory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strwebpagefactory !== $v) {
            $this->strwebpagefactory = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRWEBPAGEFACTORY;
        }


        return $this;
    } // setWebpagefactory()

    /**
     * Set the value of [strhtml] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setHtml($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strhtml !== $v) {
            $this->strhtml = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRHTML;
        }


        return $this;
    } // setHtml()

    /**
     * Set the value of [strcommonjs] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setCommonjs($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strcommonjs !== $v) {
            $this->strcommonjs = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRCOMMONJS;
        }


        return $this;
    } // setCommonjs()

    /**
     * Set the value of [clonefishparentid] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setClonefishparentid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->clonefishparentid !== $v) {
            $this->clonefishparentid = $v;
            $this->modifiedColumns[] = SysWebpagePeer::CLONEFISHPARENTID;
        }


        return $this;
    } // setClonefishparentid()

    /**
     * Set the value of [strclonefishconfig] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setClonefishconfig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strclonefishconfig !== $v) {
            $this->strclonefishconfig = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRCLONEFISHCONFIG;
        }


        return $this;
    } // setClonefishconfig()

    /**
     * Set the value of [strormclass] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setOrmclass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strormclass !== $v) {
            $this->strormclass = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRORMCLASS;
        }


        return $this;
    } // setOrmclass()

    /**
     * Set the value of [strsuccredirect] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setSuccredirect($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strsuccredirect !== $v) {
            $this->strsuccredirect = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRSUCCREDIRECT;
        }


        return $this;
    } // setSuccredirect()

    /**
     * Set the value of [sqlquery_id] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setSqlqueryId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sqlquery_id !== $v) {
            $this->sqlquery_id = $v;
            $this->modifiedColumns[] = SysWebpagePeer::SQLQUERY_ID;
        }

        if ($this->aSysSqlquery !== null && $this->aSysSqlquery->getSqlqueryId() !== $v) {
            $this->aSysSqlquery = null;
        }


        return $this;
    } // setSqlqueryId()

    /**
     * Set the value of [strgridoptions] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setGridoptions($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strgridoptions !== $v) {
            $this->strgridoptions = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRGRIDOPTIONS;
        }


        return $this;
    } // setGridoptions()

    /**
     * Set the value of [streditbaselinkurl] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setEditbaselinkurl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->streditbaselinkurl !== $v) {
            $this->streditbaselinkurl = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STREDITBASELINKURL;
        }


        return $this;
    } // setEditbaselinkurl()

    /**
     * Set the value of [streditcustomfuncname] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setEditcustomfuncname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->streditcustomfuncname !== $v) {
            $this->streditcustomfuncname = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STREDITCUSTOMFUNCNAME;
        }


        return $this;
    } // setEditcustomfuncname()

    /**
     * Set the value of [streditcustomfunction] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setEditcustomfunction($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->streditcustomfunction !== $v) {
            $this->streditcustomfunction = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STREDITCUSTOMFUNCTION;
        }


        return $this;
    } // setEditcustomfunction()

    /**
     * Set the value of [strmultiselectcustomfunction] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setMultiselectcustomfunction($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->strmultiselectcustomfunction !== $v) {
            $this->strmultiselectcustomfunction = $v;
            $this->modifiedColumns[] = SysWebpagePeer::STRMULTISELECTCUSTOMFUNCTION;
        }


        return $this;
    } // setMultiselectcustomfunction()

    /**
     * Set the value of [blnactive] column.
     *
     * @param int $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->blnactive !== $v) {
            $this->blnactive = $v;
            $this->modifiedColumns[] = SysWebpagePeer::BLNACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [dbversionid] column.
     *
     * @param int $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setDbversionid($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dbversionid !== $v) {
            $this->dbversionid = $v;
            $this->modifiedColumns[] = SysWebpagePeer::DBVERSIONID;
        }


        return $this;
    } // setDbversionid()

    /**
     * Set the value of [intcreatedby] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setCreatedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intcreatedby !== $v) {
            $this->intcreatedby = $v;
            $this->modifiedColumns[] = SysWebpagePeer::INTCREATEDBY;
        }


        return $this;
    } // setCreatedby()

    /**
     * Set the value of [intmodifiedby] column.
     *
     * @param string $v new value
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setModifiedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intmodifiedby !== $v) {
            $this->intmodifiedby = $v;
            $this->modifiedColumns[] = SysWebpagePeer::INTMODIFIEDBY;
        }


        return $this;
    } // setModifiedby()

    /**
     * Sets the value of [dtcreateddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtcreateddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtcreateddate !== null && $tmpDt = new DateTime($this->dtcreateddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtcreateddate = $newDateAsString;
                $this->modifiedColumns[] = SysWebpagePeer::DTCREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Sets the value of [dtmodifieddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SysWebpage The current object (for fluent API support)
     */
    public function setModifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dtmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->dtmodifieddate !== null && $tmpDt = new DateTime($this->dtmodifieddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dtmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = SysWebpagePeer::DTMODIFIEDDATE;
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

            $this->webpage_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->webtemplate_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->strlocation = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->strname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->strdescription = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->straction = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->strrequiredparameters = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->strwebpagefactory = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->strhtml = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->strcommonjs = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->clonefishparentid = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->strclonefishconfig = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->strormclass = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->strsuccredirect = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->sqlquery_id = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->strgridoptions = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->streditbaselinkurl = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->streditcustomfuncname = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->streditcustomfunction = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->strmultiselectcustomfunction = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->blnactive = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->dbversionid = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->intcreatedby = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->intmodifiedby = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->dtcreateddate = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->dtmodifieddate = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 26; // 26 = SysWebpagePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SysWebpage object", $e);
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

        if ($this->aSysWebtemplate !== null && $this->webtemplate_id !== $this->aSysWebtemplate->getWebtemplateId()) {
            $this->aSysWebtemplate = null;
        }
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
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SysWebpagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSysSqlquery = null;
            $this->aSysWebtemplate = null;
            $this->collSysWebpagecolumns = null;

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
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SysWebpageQuery::create()
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
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(SysWebpagePeer::DTCREATEDDATE)) {
                    $this->setCreateddate(time());
                    if (isset($_SESSION['intUserURN'])) {
                        $this->setCreatedby($_SESSION['intUserURN']);
                    }
                }
                if (!$this->isColumnModified(SysWebpagePeer::DTMODIFIEDDATE)) {
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
                if ($this->isModified() && !$this->isColumnModified(SysWebpagePeer::DTMODIFIEDDATE)) {
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

                SysWebpagePeer::addInstanceToPool($this);
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

            if ($this->aSysWebtemplate !== null) {
                if ($this->aSysWebtemplate->isModified() || $this->aSysWebtemplate->isNew()) {
                    $affectedRows += $this->aSysWebtemplate->save($con);
                }
                $this->setSysWebtemplate($this->aSysWebtemplate);
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

            if ($this->sysWebpagecolumnsScheduledForDeletion !== null) {
                if (!$this->sysWebpagecolumnsScheduledForDeletion->isEmpty()) {
                    foreach ($this->sysWebpagecolumnsScheduledForDeletion as $sysWebpagecolumn) {
                        // need to save related object because we set the relation to null
                        $sysWebpagecolumn->save($con);
                    }
                    $this->sysWebpagecolumnsScheduledForDeletion = null;
                }
            }

            if ($this->collSysWebpagecolumns !== null) {
                foreach ($this->collSysWebpagecolumns as $referrerFK) {
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

        $this->modifiedColumns[] = SysWebpagePeer::WEBPAGE_ID;
        if (null !== $this->webpage_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SysWebpagePeer::WEBPAGE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SysWebpagePeer::WEBPAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WEBPAGE_ID`';
        }
        if ($this->isColumnModified(SysWebpagePeer::WEBTEMPLATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`WEBTEMPLATE_ID`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRLOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`STRLOCATION`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STRNAME`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRDESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`STRDESCRIPTION`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRACTION)) {
            $modifiedColumns[':p' . $index++]  = '`STRACTION`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRREQUIREDPARAMETERS)) {
            $modifiedColumns[':p' . $index++]  = '`STRREQUIREDPARAMETERS`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRWEBPAGEFACTORY)) {
            $modifiedColumns[':p' . $index++]  = '`STRWEBPAGEFACTORY`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRHTML)) {
            $modifiedColumns[':p' . $index++]  = '`STRHTML`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRCOMMONJS)) {
            $modifiedColumns[':p' . $index++]  = '`STRCOMMONJS`';
        }
        if ($this->isColumnModified(SysWebpagePeer::CLONEFISHPARENTID)) {
            $modifiedColumns[':p' . $index++]  = '`CLONEFISHPARENTID`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRCLONEFISHCONFIG)) {
            $modifiedColumns[':p' . $index++]  = '`STRCLONEFISHCONFIG`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRORMCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`STRORMCLASS`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRSUCCREDIRECT)) {
            $modifiedColumns[':p' . $index++]  = '`STRSUCCREDIRECT`';
        }
        if ($this->isColumnModified(SysWebpagePeer::SQLQUERY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SQLQUERY_ID`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRGRIDOPTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`STRGRIDOPTIONS`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STREDITBASELINKURL)) {
            $modifiedColumns[':p' . $index++]  = '`STREDITBASELINKURL`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STREDITCUSTOMFUNCNAME)) {
            $modifiedColumns[':p' . $index++]  = '`STREDITCUSTOMFUNCNAME`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STREDITCUSTOMFUNCTION)) {
            $modifiedColumns[':p' . $index++]  = '`STREDITCUSTOMFUNCTION`';
        }
        if ($this->isColumnModified(SysWebpagePeer::STRMULTISELECTCUSTOMFUNCTION)) {
            $modifiedColumns[':p' . $index++]  = '`STRMULTISELECTCUSTOMFUNCTION`';
        }
        if ($this->isColumnModified(SysWebpagePeer::BLNACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`BLNACTIVE`';
        }
        if ($this->isColumnModified(SysWebpagePeer::DBVERSIONID)) {
            $modifiedColumns[':p' . $index++]  = '`DBVERSIONID`';
        }
        if ($this->isColumnModified(SysWebpagePeer::INTCREATEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTCREATEDBY`';
        }
        if ($this->isColumnModified(SysWebpagePeer::INTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`INTMODIFIEDBY`';
        }
        if ($this->isColumnModified(SysWebpagePeer::DTCREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTCREATEDDATE`';
        }
        if ($this->isColumnModified(SysWebpagePeer::DTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`DTMODIFIEDDATE`';
        }

        $sql = sprintf(
            'INSERT INTO `SYS_Webpage` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`WEBPAGE_ID`':
                        $stmt->bindValue($identifier, $this->webpage_id, PDO::PARAM_INT);
                        break;
                    case '`WEBTEMPLATE_ID`':
                        $stmt->bindValue($identifier, $this->webtemplate_id, PDO::PARAM_INT);
                        break;
                    case '`STRLOCATION`':
                        $stmt->bindValue($identifier, $this->strlocation, PDO::PARAM_STR);
                        break;
                    case '`STRNAME`':
                        $stmt->bindValue($identifier, $this->strname, PDO::PARAM_STR);
                        break;
                    case '`STRDESCRIPTION`':
                        $stmt->bindValue($identifier, $this->strdescription, PDO::PARAM_STR);
                        break;
                    case '`STRACTION`':
                        $stmt->bindValue($identifier, $this->straction, PDO::PARAM_STR);
                        break;
                    case '`STRREQUIREDPARAMETERS`':
                        $stmt->bindValue($identifier, $this->strrequiredparameters, PDO::PARAM_STR);
                        break;
                    case '`STRWEBPAGEFACTORY`':
                        $stmt->bindValue($identifier, $this->strwebpagefactory, PDO::PARAM_STR);
                        break;
                    case '`STRHTML`':
                        $stmt->bindValue($identifier, $this->strhtml, PDO::PARAM_STR);
                        break;
                    case '`STRCOMMONJS`':
                        $stmt->bindValue($identifier, $this->strcommonjs, PDO::PARAM_STR);
                        break;
                    case '`CLONEFISHPARENTID`':
                        $stmt->bindValue($identifier, $this->clonefishparentid, PDO::PARAM_INT);
                        break;
                    case '`STRCLONEFISHCONFIG`':
                        $stmt->bindValue($identifier, $this->strclonefishconfig, PDO::PARAM_STR);
                        break;
                    case '`STRORMCLASS`':
                        $stmt->bindValue($identifier, $this->strormclass, PDO::PARAM_STR);
                        break;
                    case '`STRSUCCREDIRECT`':
                        $stmt->bindValue($identifier, $this->strsuccredirect, PDO::PARAM_STR);
                        break;
                    case '`SQLQUERY_ID`':
                        $stmt->bindValue($identifier, $this->sqlquery_id, PDO::PARAM_INT);
                        break;
                    case '`STRGRIDOPTIONS`':
                        $stmt->bindValue($identifier, $this->strgridoptions, PDO::PARAM_STR);
                        break;
                    case '`STREDITBASELINKURL`':
                        $stmt->bindValue($identifier, $this->streditbaselinkurl, PDO::PARAM_STR);
                        break;
                    case '`STREDITCUSTOMFUNCNAME`':
                        $stmt->bindValue($identifier, $this->streditcustomfuncname, PDO::PARAM_STR);
                        break;
                    case '`STREDITCUSTOMFUNCTION`':
                        $stmt->bindValue($identifier, $this->streditcustomfunction, PDO::PARAM_STR);
                        break;
                    case '`STRMULTISELECTCUSTOMFUNCTION`':
                        $stmt->bindValue($identifier, $this->strmultiselectcustomfunction, PDO::PARAM_STR);
                        break;
                    case '`BLNACTIVE`':
                        $stmt->bindValue($identifier, $this->blnactive, PDO::PARAM_INT);
                        break;
                    case '`DBVERSIONID`':
                        $stmt->bindValue($identifier, $this->dbversionid, PDO::PARAM_INT);
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
        $this->setWebpageId($pk);

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

            if ($this->aSysWebtemplate !== null) {
                if (!$this->aSysWebtemplate->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSysWebtemplate->getValidationFailures());
                }
            }


            if (($retval = SysWebpagePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSysWebpagecolumns !== null) {
                    foreach ($this->collSysWebpagecolumns as $referrerFK) {
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
        $pos = SysWebpagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getWebpageId();
                break;
            case 1:
                return $this->getWebtemplateId();
                break;
            case 2:
                return $this->getLocation();
                break;
            case 3:
                return $this->getName();
                break;
            case 4:
                return $this->getDescription();
                break;
            case 5:
                return $this->getAction();
                break;
            case 6:
                return $this->getRequiredparameters();
                break;
            case 7:
                return $this->getWebpagefactory();
                break;
            case 8:
                return $this->getHtml();
                break;
            case 9:
                return $this->getCommonjs();
                break;
            case 10:
                return $this->getClonefishparentid();
                break;
            case 11:
                return $this->getClonefishconfig();
                break;
            case 12:
                return $this->getOrmclass();
                break;
            case 13:
                return $this->getSuccredirect();
                break;
            case 14:
                return $this->getSqlqueryId();
                break;
            case 15:
                return $this->getGridoptions();
                break;
            case 16:
                return $this->getEditbaselinkurl();
                break;
            case 17:
                return $this->getEditcustomfuncname();
                break;
            case 18:
                return $this->getEditcustomfunction();
                break;
            case 19:
                return $this->getMultiselectcustomfunction();
                break;
            case 20:
                return $this->getActive();
                break;
            case 21:
                return $this->getDbversionid();
                break;
            case 22:
                return $this->getCreatedby();
                break;
            case 23:
                return $this->getModifiedby();
                break;
            case 24:
                return $this->getCreateddate();
                break;
            case 25:
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
        if (isset($alreadyDumpedObjects['SysWebpage'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SysWebpage'][$this->getPrimaryKey()] = true;
        $keys = SysWebpagePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWebpageId(),
            $keys[1] => $this->getWebtemplateId(),
            $keys[2] => $this->getLocation(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getDescription(),
            $keys[5] => $this->getAction(),
            $keys[6] => $this->getRequiredparameters(),
            $keys[7] => $this->getWebpagefactory(),
            $keys[8] => $this->getHtml(),
            $keys[9] => $this->getCommonjs(),
            $keys[10] => $this->getClonefishparentid(),
            $keys[11] => $this->getClonefishconfig(),
            $keys[12] => $this->getOrmclass(),
            $keys[13] => $this->getSuccredirect(),
            $keys[14] => $this->getSqlqueryId(),
            $keys[15] => $this->getGridoptions(),
            $keys[16] => $this->getEditbaselinkurl(),
            $keys[17] => $this->getEditcustomfuncname(),
            $keys[18] => $this->getEditcustomfunction(),
            $keys[19] => $this->getMultiselectcustomfunction(),
            $keys[20] => $this->getActive(),
            $keys[21] => $this->getDbversionid(),
            $keys[22] => $this->getCreatedby(),
            $keys[23] => $this->getModifiedby(),
            $keys[24] => $this->getCreateddate(),
            $keys[25] => $this->getModifieddate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aSysSqlquery) {
                $result['SysSqlquery'] = $this->aSysSqlquery->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSysWebtemplate) {
                $result['SysWebtemplate'] = $this->aSysWebtemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSysWebpagecolumns) {
                $result['SysWebpagecolumns'] = $this->collSysWebpagecolumns->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SysWebpagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setWebpageId($value);
                break;
            case 1:
                $this->setWebtemplateId($value);
                break;
            case 2:
                $this->setLocation($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setDescription($value);
                break;
            case 5:
                $this->setAction($value);
                break;
            case 6:
                $this->setRequiredparameters($value);
                break;
            case 7:
                $this->setWebpagefactory($value);
                break;
            case 8:
                $this->setHtml($value);
                break;
            case 9:
                $this->setCommonjs($value);
                break;
            case 10:
                $this->setClonefishparentid($value);
                break;
            case 11:
                $this->setClonefishconfig($value);
                break;
            case 12:
                $this->setOrmclass($value);
                break;
            case 13:
                $this->setSuccredirect($value);
                break;
            case 14:
                $this->setSqlqueryId($value);
                break;
            case 15:
                $this->setGridoptions($value);
                break;
            case 16:
                $this->setEditbaselinkurl($value);
                break;
            case 17:
                $this->setEditcustomfuncname($value);
                break;
            case 18:
                $this->setEditcustomfunction($value);
                break;
            case 19:
                $this->setMultiselectcustomfunction($value);
                break;
            case 20:
                $this->setActive($value);
                break;
            case 21:
                $this->setDbversionid($value);
                break;
            case 22:
                $this->setCreatedby($value);
                break;
            case 23:
                $this->setModifiedby($value);
                break;
            case 24:
                $this->setCreateddate($value);
                break;
            case 25:
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
        $keys = SysWebpagePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setWebpageId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setWebtemplateId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLocation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAction($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRequiredparameters($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setWebpagefactory($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHtml($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCommonjs($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClonefishparentid($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClonefishconfig($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOrmclass($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSuccredirect($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSqlqueryId($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setGridoptions($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEditbaselinkurl($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEditcustomfuncname($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEditcustomfunction($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMultiselectcustomfunction($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setActive($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDbversionid($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCreatedby($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setModifiedby($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCreateddate($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setModifieddate($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SysWebpagePeer::DATABASE_NAME);

        if ($this->isColumnModified(SysWebpagePeer::WEBPAGE_ID)) $criteria->add(SysWebpagePeer::WEBPAGE_ID, $this->webpage_id);
        if ($this->isColumnModified(SysWebpagePeer::WEBTEMPLATE_ID)) $criteria->add(SysWebpagePeer::WEBTEMPLATE_ID, $this->webtemplate_id);
        if ($this->isColumnModified(SysWebpagePeer::STRLOCATION)) $criteria->add(SysWebpagePeer::STRLOCATION, $this->strlocation);
        if ($this->isColumnModified(SysWebpagePeer::STRNAME)) $criteria->add(SysWebpagePeer::STRNAME, $this->strname);
        if ($this->isColumnModified(SysWebpagePeer::STRDESCRIPTION)) $criteria->add(SysWebpagePeer::STRDESCRIPTION, $this->strdescription);
        if ($this->isColumnModified(SysWebpagePeer::STRACTION)) $criteria->add(SysWebpagePeer::STRACTION, $this->straction);
        if ($this->isColumnModified(SysWebpagePeer::STRREQUIREDPARAMETERS)) $criteria->add(SysWebpagePeer::STRREQUIREDPARAMETERS, $this->strrequiredparameters);
        if ($this->isColumnModified(SysWebpagePeer::STRWEBPAGEFACTORY)) $criteria->add(SysWebpagePeer::STRWEBPAGEFACTORY, $this->strwebpagefactory);
        if ($this->isColumnModified(SysWebpagePeer::STRHTML)) $criteria->add(SysWebpagePeer::STRHTML, $this->strhtml);
        if ($this->isColumnModified(SysWebpagePeer::STRCOMMONJS)) $criteria->add(SysWebpagePeer::STRCOMMONJS, $this->strcommonjs);
        if ($this->isColumnModified(SysWebpagePeer::CLONEFISHPARENTID)) $criteria->add(SysWebpagePeer::CLONEFISHPARENTID, $this->clonefishparentid);
        if ($this->isColumnModified(SysWebpagePeer::STRCLONEFISHCONFIG)) $criteria->add(SysWebpagePeer::STRCLONEFISHCONFIG, $this->strclonefishconfig);
        if ($this->isColumnModified(SysWebpagePeer::STRORMCLASS)) $criteria->add(SysWebpagePeer::STRORMCLASS, $this->strormclass);
        if ($this->isColumnModified(SysWebpagePeer::STRSUCCREDIRECT)) $criteria->add(SysWebpagePeer::STRSUCCREDIRECT, $this->strsuccredirect);
        if ($this->isColumnModified(SysWebpagePeer::SQLQUERY_ID)) $criteria->add(SysWebpagePeer::SQLQUERY_ID, $this->sqlquery_id);
        if ($this->isColumnModified(SysWebpagePeer::STRGRIDOPTIONS)) $criteria->add(SysWebpagePeer::STRGRIDOPTIONS, $this->strgridoptions);
        if ($this->isColumnModified(SysWebpagePeer::STREDITBASELINKURL)) $criteria->add(SysWebpagePeer::STREDITBASELINKURL, $this->streditbaselinkurl);
        if ($this->isColumnModified(SysWebpagePeer::STREDITCUSTOMFUNCNAME)) $criteria->add(SysWebpagePeer::STREDITCUSTOMFUNCNAME, $this->streditcustomfuncname);
        if ($this->isColumnModified(SysWebpagePeer::STREDITCUSTOMFUNCTION)) $criteria->add(SysWebpagePeer::STREDITCUSTOMFUNCTION, $this->streditcustomfunction);
        if ($this->isColumnModified(SysWebpagePeer::STRMULTISELECTCUSTOMFUNCTION)) $criteria->add(SysWebpagePeer::STRMULTISELECTCUSTOMFUNCTION, $this->strmultiselectcustomfunction);
        if ($this->isColumnModified(SysWebpagePeer::BLNACTIVE)) $criteria->add(SysWebpagePeer::BLNACTIVE, $this->blnactive);
        if ($this->isColumnModified(SysWebpagePeer::DBVERSIONID)) $criteria->add(SysWebpagePeer::DBVERSIONID, $this->dbversionid);
        if ($this->isColumnModified(SysWebpagePeer::INTCREATEDBY)) $criteria->add(SysWebpagePeer::INTCREATEDBY, $this->intcreatedby);
        if ($this->isColumnModified(SysWebpagePeer::INTMODIFIEDBY)) $criteria->add(SysWebpagePeer::INTMODIFIEDBY, $this->intmodifiedby);
        if ($this->isColumnModified(SysWebpagePeer::DTCREATEDDATE)) $criteria->add(SysWebpagePeer::DTCREATEDDATE, $this->dtcreateddate);
        if ($this->isColumnModified(SysWebpagePeer::DTMODIFIEDDATE)) $criteria->add(SysWebpagePeer::DTMODIFIEDDATE, $this->dtmodifieddate);

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
        $criteria = new Criteria(SysWebpagePeer::DATABASE_NAME);
        $criteria->add(SysWebpagePeer::WEBPAGE_ID, $this->webpage_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getWebpageId();
    }

    /**
     * Generic method to set the primary key (webpage_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWebpageId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getWebpageId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SysWebpage (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setWebtemplateId($this->getWebtemplateId());
        $copyObj->setLocation($this->getLocation());
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setAction($this->getAction());
        $copyObj->setRequiredparameters($this->getRequiredparameters());
        $copyObj->setWebpagefactory($this->getWebpagefactory());
        $copyObj->setHtml($this->getHtml());
        $copyObj->setCommonjs($this->getCommonjs());
        $copyObj->setClonefishparentid($this->getClonefishparentid());
        $copyObj->setClonefishconfig($this->getClonefishconfig());
        $copyObj->setOrmclass($this->getOrmclass());
        $copyObj->setSuccredirect($this->getSuccredirect());
        $copyObj->setSqlqueryId($this->getSqlqueryId());
        $copyObj->setGridoptions($this->getGridoptions());
        $copyObj->setEditbaselinkurl($this->getEditbaselinkurl());
        $copyObj->setEditcustomfuncname($this->getEditcustomfuncname());
        $copyObj->setEditcustomfunction($this->getEditcustomfunction());
        $copyObj->setMultiselectcustomfunction($this->getMultiselectcustomfunction());
        $copyObj->setActive($this->getActive());
        $copyObj->setDbversionid($this->getDbversionid());
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

            foreach ($this->getSysWebpagecolumns() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSysWebpagecolumn($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWebpageId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SysWebpage Clone of current object.
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
     * @return SysWebpagePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SysWebpagePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SysSqlquery object.
     *
     * @param             SysSqlquery $v
     * @return SysWebpage The current object (for fluent API support)
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
            $v->addSysWebpage($this);
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
                $this->aSysSqlquery->addSysWebpages($this);
             */
        }

        return $this->aSysSqlquery;
    }

    /**
     * Declares an association between this object and a SysWebtemplate object.
     *
     * @param             SysWebtemplate $v
     * @return SysWebpage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSysWebtemplate(SysWebtemplate $v = null)
    {
        if ($v === null) {
            $this->setWebtemplateId(NULL);
        } else {
            $this->setWebtemplateId($v->getWebtemplateId());
        }

        $this->aSysWebtemplate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SysWebtemplate object, it will not be re-added.
        if ($v !== null) {
            $v->addSysWebpage($this);
        }


        return $this;
    }


    /**
     * Get the associated SysWebtemplate object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return SysWebtemplate The associated SysWebtemplate object.
     * @throws PropelException
     */
    public function getSysWebtemplate(PropelPDO $con = null)
    {
        if ($this->aSysWebtemplate === null && (($this->webtemplate_id !== "" && $this->webtemplate_id !== null))) {
            $this->aSysWebtemplate = SysWebtemplateQuery::create()->findPk($this->webtemplate_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSysWebtemplate->addSysWebpages($this);
             */
        }

        return $this->aSysWebtemplate;
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
        if ('SysWebpagecolumn' == $relationName) {
            $this->initSysWebpagecolumns();
        }
    }

    /**
     * Clears out the collSysWebpagecolumns collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSysWebpagecolumns()
     */
    public function clearSysWebpagecolumns()
    {
        $this->collSysWebpagecolumns = null; // important to set this to null since that means it is uninitialized
        $this->collSysWebpagecolumnsPartial = null;
    }

    /**
     * reset is the collSysWebpagecolumns collection loaded partially
     *
     * @return void
     */
    public function resetPartialSysWebpagecolumns($v = true)
    {
        $this->collSysWebpagecolumnsPartial = $v;
    }

    /**
     * Initializes the collSysWebpagecolumns collection.
     *
     * By default this just sets the collSysWebpagecolumns collection to an empty array (like clearcollSysWebpagecolumns());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSysWebpagecolumns($overrideExisting = true)
    {
        if (null !== $this->collSysWebpagecolumns && !$overrideExisting) {
            return;
        }
        $this->collSysWebpagecolumns = new PropelObjectCollection();
        $this->collSysWebpagecolumns->setModel('SysWebpagecolumn');
    }

    /**
     * Gets an array of SysWebpagecolumn objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SysWebpage is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SysWebpagecolumn[] List of SysWebpagecolumn objects
     * @throws PropelException
     */
    public function getSysWebpagecolumns($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSysWebpagecolumnsPartial && !$this->isNew();
        if (null === $this->collSysWebpagecolumns || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSysWebpagecolumns) {
                // return empty collection
                $this->initSysWebpagecolumns();
            } else {
                $collSysWebpagecolumns = SysWebpagecolumnQuery::create(null, $criteria)
                    ->filterBySysWebpage($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSysWebpagecolumnsPartial && count($collSysWebpagecolumns)) {
                      $this->initSysWebpagecolumns(false);

                      foreach($collSysWebpagecolumns as $obj) {
                        if (false == $this->collSysWebpagecolumns->contains($obj)) {
                          $this->collSysWebpagecolumns->append($obj);
                        }
                      }

                      $this->collSysWebpagecolumnsPartial = true;
                    }

                    return $collSysWebpagecolumns;
                }

                if($partial && $this->collSysWebpagecolumns) {
                    foreach($this->collSysWebpagecolumns as $obj) {
                        if($obj->isNew()) {
                            $collSysWebpagecolumns[] = $obj;
                        }
                    }
                }

                $this->collSysWebpagecolumns = $collSysWebpagecolumns;
                $this->collSysWebpagecolumnsPartial = false;
            }
        }

        return $this->collSysWebpagecolumns;
    }

    /**
     * Sets a collection of SysWebpagecolumn objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sysWebpagecolumns A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setSysWebpagecolumns(PropelCollection $sysWebpagecolumns, PropelPDO $con = null)
    {
        $this->sysWebpagecolumnsScheduledForDeletion = $this->getSysWebpagecolumns(new Criteria(), $con)->diff($sysWebpagecolumns);

        foreach ($this->sysWebpagecolumnsScheduledForDeletion as $sysWebpagecolumnRemoved) {
            $sysWebpagecolumnRemoved->setSysWebpage(null);
        }

        $this->collSysWebpagecolumns = null;
        foreach ($sysWebpagecolumns as $sysWebpagecolumn) {
            $this->addSysWebpagecolumn($sysWebpagecolumn);
        }

        $this->collSysWebpagecolumns = $sysWebpagecolumns;
        $this->collSysWebpagecolumnsPartial = false;
    }

    /**
     * Returns the number of related SysWebpagecolumn objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SysWebpagecolumn objects.
     * @throws PropelException
     */
    public function countSysWebpagecolumns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSysWebpagecolumnsPartial && !$this->isNew();
        if (null === $this->collSysWebpagecolumns || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSysWebpagecolumns) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getSysWebpagecolumns());
                }
                $query = SysWebpagecolumnQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySysWebpage($this)
                    ->count($con);
            }
        } else {
            return count($this->collSysWebpagecolumns);
        }
    }

    /**
     * Method called to associate a SysWebpagecolumn object to this object
     * through the SysWebpagecolumn foreign key attribute.
     *
     * @param    SysWebpagecolumn $l SysWebpagecolumn
     * @return SysWebpage The current object (for fluent API support)
     */
    public function addSysWebpagecolumn(SysWebpagecolumn $l)
    {
        if ($this->collSysWebpagecolumns === null) {
            $this->initSysWebpagecolumns();
            $this->collSysWebpagecolumnsPartial = true;
        }
        if (!$this->collSysWebpagecolumns->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddSysWebpagecolumn($l);
        }

        return $this;
    }

    /**
     * @param	SysWebpagecolumn $sysWebpagecolumn The sysWebpagecolumn object to add.
     */
    protected function doAddSysWebpagecolumn($sysWebpagecolumn)
    {
        $this->collSysWebpagecolumns[]= $sysWebpagecolumn;
        $sysWebpagecolumn->setSysWebpage($this);
    }

    /**
     * @param	SysWebpagecolumn $sysWebpagecolumn The sysWebpagecolumn object to remove.
     */
    public function removeSysWebpagecolumn($sysWebpagecolumn)
    {
        if ($this->getSysWebpagecolumns()->contains($sysWebpagecolumn)) {
            $this->collSysWebpagecolumns->remove($this->collSysWebpagecolumns->search($sysWebpagecolumn));
            if (null === $this->sysWebpagecolumnsScheduledForDeletion) {
                $this->sysWebpagecolumnsScheduledForDeletion = clone $this->collSysWebpagecolumns;
                $this->sysWebpagecolumnsScheduledForDeletion->clear();
            }
            $this->sysWebpagecolumnsScheduledForDeletion[]= $sysWebpagecolumn;
            $sysWebpagecolumn->setSysWebpage(null);
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->webpage_id = null;
        $this->webtemplate_id = null;
        $this->strlocation = null;
        $this->strname = null;
        $this->strdescription = null;
        $this->straction = null;
        $this->strrequiredparameters = null;
        $this->strwebpagefactory = null;
        $this->strhtml = null;
        $this->strcommonjs = null;
        $this->clonefishparentid = null;
        $this->strclonefishconfig = null;
        $this->strormclass = null;
        $this->strsuccredirect = null;
        $this->sqlquery_id = null;
        $this->strgridoptions = null;
        $this->streditbaselinkurl = null;
        $this->streditcustomfuncname = null;
        $this->streditcustomfunction = null;
        $this->strmultiselectcustomfunction = null;
        $this->blnactive = null;
        $this->dbversionid = null;
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
            if ($this->collSysWebpagecolumns) {
                foreach ($this->collSysWebpagecolumns as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collSysWebpagecolumns instanceof PropelCollection) {
            $this->collSysWebpagecolumns->clearIterator();
        }
        $this->collSysWebpagecolumns = null;
        $this->aSysSqlquery = null;
        $this->aSysWebtemplate = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SysWebpagePeer::DEFAULT_STRING_FORMAT);
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
     * @return     SysWebpage The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = SysWebpagePeer::DTMODIFIEDDATE;

        return $this;
    }

    // dbversion behavior

    /**
     * Set common function to return the Database Version ID for DBVersion and SQLAudit Behavior
     *
     * @return     Value of <column name="DBVersionID" phpName="Dbversionid" type="INTEGER" required="false"/>
     */

     protected function getDefaultDBVersionid()
     {
         return $this->getDbversionid();
     }


}
