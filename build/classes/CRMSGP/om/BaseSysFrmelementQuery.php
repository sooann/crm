<?php


/**
 * Base class that represents a query for the 'SYS_FrmElement' table.
 *
 *
 *
 * @method SysFrmelementQuery orderByFrmelementId($order = Criteria::ASC) Order by the frmelement_id column
 * @method SysFrmelementQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysFrmelementQuery orderByClassname($order = Criteria::ASC) Order by the strClassName column
 * @method SysFrmelementQuery orderByExtends($order = Criteria::ASC) Order by the strExtends column
 * @method SysFrmelementQuery orderByIncludes($order = Criteria::ASC) Order by the strIncludes column
 * @method SysFrmelementQuery orderByVariables($order = Criteria::ASC) Order by the strVariables column
 * @method SysFrmelementQuery orderByConstructor($order = Criteria::ASC) Order by the strConstructor column
 * @method SysFrmelementQuery orderByConstructorargs($order = Criteria::ASC) Order by the strConstructorArgs column
 * @method SysFrmelementQuery orderByGethtml($order = Criteria::ASC) Order by the strGetHTML column
 * @method SysFrmelementQuery orderByGethtmlrow($order = Criteria::ASC) Order by the strGetHTMLRow column
 * @method SysFrmelementQuery orderByGetvalue($order = Criteria::ASC) Order by the strGetValue column
 * @method SysFrmelementQuery orderBySetvalue($order = Criteria::ASC) Order by the strSetValue column
 * @method SysFrmelementQuery orderByGetscripts($order = Criteria::ASC) Order by the strGetScripts column
 * @method SysFrmelementQuery orderByOthercode($order = Criteria::ASC) Order by the strOtherCode column
 * @method SysFrmelementQuery orderByParameters($order = Criteria::ASC) Order by the strParameters column
 * @method SysFrmelementQuery orderByParamarray($order = Criteria::ASC) Order by the strParamArray column
 * @method SysFrmelementQuery orderByDbversionid($order = Criteria::ASC) Order by the DBVersionID column
 * @method SysFrmelementQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysFrmelementQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysFrmelementQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysFrmelementQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysFrmelementQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysFrmelementQuery groupByFrmelementId() Group by the frmelement_id column
 * @method SysFrmelementQuery groupByName() Group by the strName column
 * @method SysFrmelementQuery groupByClassname() Group by the strClassName column
 * @method SysFrmelementQuery groupByExtends() Group by the strExtends column
 * @method SysFrmelementQuery groupByIncludes() Group by the strIncludes column
 * @method SysFrmelementQuery groupByVariables() Group by the strVariables column
 * @method SysFrmelementQuery groupByConstructor() Group by the strConstructor column
 * @method SysFrmelementQuery groupByConstructorargs() Group by the strConstructorArgs column
 * @method SysFrmelementQuery groupByGethtml() Group by the strGetHTML column
 * @method SysFrmelementQuery groupByGethtmlrow() Group by the strGetHTMLRow column
 * @method SysFrmelementQuery groupByGetvalue() Group by the strGetValue column
 * @method SysFrmelementQuery groupBySetvalue() Group by the strSetValue column
 * @method SysFrmelementQuery groupByGetscripts() Group by the strGetScripts column
 * @method SysFrmelementQuery groupByOthercode() Group by the strOtherCode column
 * @method SysFrmelementQuery groupByParameters() Group by the strParameters column
 * @method SysFrmelementQuery groupByParamarray() Group by the strParamArray column
 * @method SysFrmelementQuery groupByDbversionid() Group by the DBVersionID column
 * @method SysFrmelementQuery groupByActive() Group by the blnActive column
 * @method SysFrmelementQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysFrmelementQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysFrmelementQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysFrmelementQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysFrmelementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysFrmelementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysFrmelementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysFrmelement findOne(PropelPDO $con = null) Return the first SysFrmelement matching the query
 * @method SysFrmelement findOneOrCreate(PropelPDO $con = null) Return the first SysFrmelement matching the query, or a new SysFrmelement object populated from the query conditions when no match is found
 *
 * @method SysFrmelement findOneByFrmelementId(string $frmelement_id) Return the first SysFrmelement filtered by the frmelement_id column
 * @method SysFrmelement findOneByName(string $strName) Return the first SysFrmelement filtered by the strName column
 * @method SysFrmelement findOneByClassname(string $strClassName) Return the first SysFrmelement filtered by the strClassName column
 * @method SysFrmelement findOneByExtends(string $strExtends) Return the first SysFrmelement filtered by the strExtends column
 * @method SysFrmelement findOneByIncludes(string $strIncludes) Return the first SysFrmelement filtered by the strIncludes column
 * @method SysFrmelement findOneByVariables(string $strVariables) Return the first SysFrmelement filtered by the strVariables column
 * @method SysFrmelement findOneByConstructor(string $strConstructor) Return the first SysFrmelement filtered by the strConstructor column
 * @method SysFrmelement findOneByConstructorargs(string $strConstructorArgs) Return the first SysFrmelement filtered by the strConstructorArgs column
 * @method SysFrmelement findOneByGethtml(string $strGetHTML) Return the first SysFrmelement filtered by the strGetHTML column
 * @method SysFrmelement findOneByGethtmlrow(string $strGetHTMLRow) Return the first SysFrmelement filtered by the strGetHTMLRow column
 * @method SysFrmelement findOneByGetvalue(string $strGetValue) Return the first SysFrmelement filtered by the strGetValue column
 * @method SysFrmelement findOneBySetvalue(string $strSetValue) Return the first SysFrmelement filtered by the strSetValue column
 * @method SysFrmelement findOneByGetscripts(string $strGetScripts) Return the first SysFrmelement filtered by the strGetScripts column
 * @method SysFrmelement findOneByOthercode(string $strOtherCode) Return the first SysFrmelement filtered by the strOtherCode column
 * @method SysFrmelement findOneByParameters(string $strParameters) Return the first SysFrmelement filtered by the strParameters column
 * @method SysFrmelement findOneByParamarray(string $strParamArray) Return the first SysFrmelement filtered by the strParamArray column
 * @method SysFrmelement findOneByDbversionid(string $DBVersionID) Return the first SysFrmelement filtered by the DBVersionID column
 * @method SysFrmelement findOneByActive(int $blnActive) Return the first SysFrmelement filtered by the blnActive column
 * @method SysFrmelement findOneByCreatedby(string $intCreatedBy) Return the first SysFrmelement filtered by the intCreatedBy column
 * @method SysFrmelement findOneByModifiedby(string $intModifiedBy) Return the first SysFrmelement filtered by the intModifiedBy column
 * @method SysFrmelement findOneByCreateddate(string $dtCreatedDate) Return the first SysFrmelement filtered by the dtCreatedDate column
 * @method SysFrmelement findOneByModifieddate(string $dtModifiedDate) Return the first SysFrmelement filtered by the dtModifiedDate column
 *
 * @method array findByFrmelementId(string $frmelement_id) Return SysFrmelement objects filtered by the frmelement_id column
 * @method array findByName(string $strName) Return SysFrmelement objects filtered by the strName column
 * @method array findByClassname(string $strClassName) Return SysFrmelement objects filtered by the strClassName column
 * @method array findByExtends(string $strExtends) Return SysFrmelement objects filtered by the strExtends column
 * @method array findByIncludes(string $strIncludes) Return SysFrmelement objects filtered by the strIncludes column
 * @method array findByVariables(string $strVariables) Return SysFrmelement objects filtered by the strVariables column
 * @method array findByConstructor(string $strConstructor) Return SysFrmelement objects filtered by the strConstructor column
 * @method array findByConstructorargs(string $strConstructorArgs) Return SysFrmelement objects filtered by the strConstructorArgs column
 * @method array findByGethtml(string $strGetHTML) Return SysFrmelement objects filtered by the strGetHTML column
 * @method array findByGethtmlrow(string $strGetHTMLRow) Return SysFrmelement objects filtered by the strGetHTMLRow column
 * @method array findByGetvalue(string $strGetValue) Return SysFrmelement objects filtered by the strGetValue column
 * @method array findBySetvalue(string $strSetValue) Return SysFrmelement objects filtered by the strSetValue column
 * @method array findByGetscripts(string $strGetScripts) Return SysFrmelement objects filtered by the strGetScripts column
 * @method array findByOthercode(string $strOtherCode) Return SysFrmelement objects filtered by the strOtherCode column
 * @method array findByParameters(string $strParameters) Return SysFrmelement objects filtered by the strParameters column
 * @method array findByParamarray(string $strParamArray) Return SysFrmelement objects filtered by the strParamArray column
 * @method array findByDbversionid(string $DBVersionID) Return SysFrmelement objects filtered by the DBVersionID column
 * @method array findByActive(int $blnActive) Return SysFrmelement objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysFrmelement objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysFrmelement objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysFrmelement objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysFrmelement objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysFrmelementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysFrmelementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysFrmelement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysFrmelementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysFrmelementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysFrmelementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysFrmelementQuery) {
            return $criteria;
        }
        $query = new SysFrmelementQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SysFrmelement|SysFrmelement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysFrmelementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysFrmelementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   SysFrmelement A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FRMELEMENT_ID`, `STRNAME`, `STRCLASSNAME`, `STREXTENDS`, `STRINCLUDES`, `STRVARIABLES`, `STRCONSTRUCTOR`, `STRCONSTRUCTORARGS`, `STRGETHTML`, `STRGETHTMLROW`, `STRGETVALUE`, `STRSETVALUE`, `STRGETSCRIPTS`, `STROTHERCODE`, `STRPARAMETERS`, `STRPARAMARRAY`, `DBVERSIONID`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_FrmElement` WHERE `FRMELEMENT_ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SysFrmelement();
            $obj->hydrate($row);
            SysFrmelementPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return SysFrmelement|SysFrmelement[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SysFrmelement[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysFrmelementPeer::FRMELEMENT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysFrmelementPeer::FRMELEMENT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the frmelement_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFrmelementId(1234); // WHERE frmelement_id = 1234
     * $query->filterByFrmelementId(array(12, 34)); // WHERE frmelement_id IN (12, 34)
     * $query->filterByFrmelementId(array('min' => 12)); // WHERE frmelement_id > 12
     * </code>
     *
     * @param     mixed $frmelementId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByFrmelementId($frmelementId = null, $comparison = null)
    {
        if (is_array($frmelementId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysFrmelementPeer::FRMELEMENT_ID, $frmelementId, $comparison);
    }

    /**
     * Filter the query on the strName column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE strName = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE strName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRNAME, $name, $comparison);
    }

    /**
     * Filter the query on the strClassName column
     *
     * Example usage:
     * <code>
     * $query->filterByClassname('fooValue');   // WHERE strClassName = 'fooValue'
     * $query->filterByClassname('%fooValue%'); // WHERE strClassName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByClassname($classname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $classname)) {
                $classname = str_replace('*', '%', $classname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRCLASSNAME, $classname, $comparison);
    }

    /**
     * Filter the query on the strExtends column
     *
     * Example usage:
     * <code>
     * $query->filterByExtends('fooValue');   // WHERE strExtends = 'fooValue'
     * $query->filterByExtends('%fooValue%'); // WHERE strExtends LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extends The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByExtends($extends = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extends)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extends)) {
                $extends = str_replace('*', '%', $extends);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STREXTENDS, $extends, $comparison);
    }

    /**
     * Filter the query on the strIncludes column
     *
     * Example usage:
     * <code>
     * $query->filterByIncludes('fooValue');   // WHERE strIncludes = 'fooValue'
     * $query->filterByIncludes('%fooValue%'); // WHERE strIncludes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $includes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByIncludes($includes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($includes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $includes)) {
                $includes = str_replace('*', '%', $includes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRINCLUDES, $includes, $comparison);
    }

    /**
     * Filter the query on the strVariables column
     *
     * Example usage:
     * <code>
     * $query->filterByVariables('fooValue');   // WHERE strVariables = 'fooValue'
     * $query->filterByVariables('%fooValue%'); // WHERE strVariables LIKE '%fooValue%'
     * </code>
     *
     * @param     string $variables The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByVariables($variables = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($variables)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $variables)) {
                $variables = str_replace('*', '%', $variables);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRVARIABLES, $variables, $comparison);
    }

    /**
     * Filter the query on the strConstructor column
     *
     * Example usage:
     * <code>
     * $query->filterByConstructor('fooValue');   // WHERE strConstructor = 'fooValue'
     * $query->filterByConstructor('%fooValue%'); // WHERE strConstructor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $constructor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByConstructor($constructor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($constructor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $constructor)) {
                $constructor = str_replace('*', '%', $constructor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRCONSTRUCTOR, $constructor, $comparison);
    }

    /**
     * Filter the query on the strConstructorArgs column
     *
     * Example usage:
     * <code>
     * $query->filterByConstructorargs('fooValue');   // WHERE strConstructorArgs = 'fooValue'
     * $query->filterByConstructorargs('%fooValue%'); // WHERE strConstructorArgs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $constructorargs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByConstructorargs($constructorargs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($constructorargs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $constructorargs)) {
                $constructorargs = str_replace('*', '%', $constructorargs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRCONSTRUCTORARGS, $constructorargs, $comparison);
    }

    /**
     * Filter the query on the strGetHTML column
     *
     * Example usage:
     * <code>
     * $query->filterByGethtml('fooValue');   // WHERE strGetHTML = 'fooValue'
     * $query->filterByGethtml('%fooValue%'); // WHERE strGetHTML LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gethtml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByGethtml($gethtml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gethtml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gethtml)) {
                $gethtml = str_replace('*', '%', $gethtml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRGETHTML, $gethtml, $comparison);
    }

    /**
     * Filter the query on the strGetHTMLRow column
     *
     * Example usage:
     * <code>
     * $query->filterByGethtmlrow('fooValue');   // WHERE strGetHTMLRow = 'fooValue'
     * $query->filterByGethtmlrow('%fooValue%'); // WHERE strGetHTMLRow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gethtmlrow The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByGethtmlrow($gethtmlrow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gethtmlrow)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gethtmlrow)) {
                $gethtmlrow = str_replace('*', '%', $gethtmlrow);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRGETHTMLROW, $gethtmlrow, $comparison);
    }

    /**
     * Filter the query on the strGetValue column
     *
     * Example usage:
     * <code>
     * $query->filterByGetvalue('fooValue');   // WHERE strGetValue = 'fooValue'
     * $query->filterByGetvalue('%fooValue%'); // WHERE strGetValue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $getvalue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByGetvalue($getvalue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($getvalue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $getvalue)) {
                $getvalue = str_replace('*', '%', $getvalue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRGETVALUE, $getvalue, $comparison);
    }

    /**
     * Filter the query on the strSetValue column
     *
     * Example usage:
     * <code>
     * $query->filterBySetvalue('fooValue');   // WHERE strSetValue = 'fooValue'
     * $query->filterBySetvalue('%fooValue%'); // WHERE strSetValue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $setvalue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterBySetvalue($setvalue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($setvalue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $setvalue)) {
                $setvalue = str_replace('*', '%', $setvalue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRSETVALUE, $setvalue, $comparison);
    }

    /**
     * Filter the query on the strGetScripts column
     *
     * Example usage:
     * <code>
     * $query->filterByGetscripts('fooValue');   // WHERE strGetScripts = 'fooValue'
     * $query->filterByGetscripts('%fooValue%'); // WHERE strGetScripts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $getscripts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByGetscripts($getscripts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($getscripts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $getscripts)) {
                $getscripts = str_replace('*', '%', $getscripts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRGETSCRIPTS, $getscripts, $comparison);
    }

    /**
     * Filter the query on the strOtherCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOthercode('fooValue');   // WHERE strOtherCode = 'fooValue'
     * $query->filterByOthercode('%fooValue%'); // WHERE strOtherCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othercode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByOthercode($othercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othercode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othercode)) {
                $othercode = str_replace('*', '%', $othercode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STROTHERCODE, $othercode, $comparison);
    }

    /**
     * Filter the query on the strParameters column
     *
     * Example usage:
     * <code>
     * $query->filterByParameters('fooValue');   // WHERE strParameters = 'fooValue'
     * $query->filterByParameters('%fooValue%'); // WHERE strParameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByParameters($parameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parameters)) {
                $parameters = str_replace('*', '%', $parameters);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRPARAMETERS, $parameters, $comparison);
    }

    /**
     * Filter the query on the strParamArray column
     *
     * Example usage:
     * <code>
     * $query->filterByParamarray('fooValue');   // WHERE strParamArray = 'fooValue'
     * $query->filterByParamarray('%fooValue%'); // WHERE strParamArray LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paramarray The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByParamarray($paramarray = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paramarray)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paramarray)) {
                $paramarray = str_replace('*', '%', $paramarray);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::STRPARAMARRAY, $paramarray, $comparison);
    }

    /**
     * Filter the query on the DBVersionID column
     *
     * Example usage:
     * <code>
     * $query->filterByDbversionid(1234); // WHERE DBVersionID = 1234
     * $query->filterByDbversionid(array(12, 34)); // WHERE DBVersionID IN (12, 34)
     * $query->filterByDbversionid(array('min' => 12)); // WHERE DBVersionID > 12
     * </code>
     *
     * @param     mixed $dbversionid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByDbversionid($dbversionid = null, $comparison = null)
    {
        if (is_array($dbversionid)) {
            $useMinMax = false;
            if (isset($dbversionid['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::DBVERSIONID, $dbversionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dbversionid['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::DBVERSIONID, $dbversionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::DBVERSIONID, $dbversionid, $comparison);
    }

    /**
     * Filter the query on the blnActive column
     *
     * Example usage:
     * <code>
     * $query->filterByActive(1234); // WHERE blnActive = 1234
     * $query->filterByActive(array(12, 34)); // WHERE blnActive IN (12, 34)
     * $query->filterByActive(array('min' => 12)); // WHERE blnActive > 12
     * </code>
     *
     * @param     mixed $active The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::BLNACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the intCreatedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedby(1234); // WHERE intCreatedBy = 1234
     * $query->filterByCreatedby(array(12, 34)); // WHERE intCreatedBy IN (12, 34)
     * $query->filterByCreatedby(array('min' => 12)); // WHERE intCreatedBy > 12
     * </code>
     *
     * @param     mixed $createdby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::INTCREATEDBY, $createdby, $comparison);
    }

    /**
     * Filter the query on the intModifiedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedby(1234); // WHERE intModifiedBy = 1234
     * $query->filterByModifiedby(array(12, 34)); // WHERE intModifiedBy IN (12, 34)
     * $query->filterByModifiedby(array('min' => 12)); // WHERE intModifiedBy > 12
     * </code>
     *
     * @param     mixed $modifiedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::INTMODIFIEDBY, $modifiedby, $comparison);
    }

    /**
     * Filter the query on the dtCreatedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateddate('2011-03-14'); // WHERE dtCreatedDate = '2011-03-14'
     * $query->filterByCreateddate('now'); // WHERE dtCreatedDate = '2011-03-14'
     * $query->filterByCreateddate(array('max' => 'yesterday')); // WHERE dtCreatedDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $createddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::DTCREATEDDATE, $createddate, $comparison);
    }

    /**
     * Filter the query on the dtModifiedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByModifieddate('2011-03-14'); // WHERE dtModifiedDate = '2011-03-14'
     * $query->filterByModifieddate('now'); // WHERE dtModifiedDate = '2011-03-14'
     * $query->filterByModifieddate(array('max' => 'yesterday')); // WHERE dtModifiedDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifieddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysFrmelementPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysFrmelementPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmelementPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SysFrmelement $sysFrmelement Object to remove from the list of results
     *
     * @return SysFrmelementQuery The current query, for fluid interface
     */
    public function prune($sysFrmelement = null)
    {
        if ($sysFrmelement) {
            $this->addUsingAlias(SysFrmelementPeer::FRMELEMENT_ID, $sysFrmelement->getFrmelementId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysFrmelementPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysFrmelementPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysFrmelementPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysFrmelementPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysFrmelementPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysFrmelementQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysFrmelementPeer::DTCREATEDDATE);
    }
}
