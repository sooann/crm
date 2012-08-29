<?php


/**
 * Base class that represents a query for the 'SYS_FrmValidation' table.
 *
 *
 *
 * @method SysFrmvalidationQuery orderByFrmvalidationId($order = Criteria::ASC) Order by the frmvalidation_id column
 * @method SysFrmvalidationQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysFrmvalidationQuery orderByClassname($order = Criteria::ASC) Order by the strClassName column
 * @method SysFrmvalidationQuery orderByVariables($order = Criteria::ASC) Order by the strVariables column
 * @method SysFrmvalidationQuery orderByJscode($order = Criteria::ASC) Order by the strJSCode column
 * @method SysFrmvalidationQuery orderByIsvalidcode($order = Criteria::ASC) Order by the strIsValidCode column
 * @method SysFrmvalidationQuery orderByOthercode($order = Criteria::ASC) Order by the strOtherCode column
 * @method SysFrmvalidationQuery orderByDbversionid($order = Criteria::ASC) Order by the DBVersionID column
 * @method SysFrmvalidationQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysFrmvalidationQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysFrmvalidationQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysFrmvalidationQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysFrmvalidationQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysFrmvalidationQuery groupByFrmvalidationId() Group by the frmvalidation_id column
 * @method SysFrmvalidationQuery groupByName() Group by the strName column
 * @method SysFrmvalidationQuery groupByClassname() Group by the strClassName column
 * @method SysFrmvalidationQuery groupByVariables() Group by the strVariables column
 * @method SysFrmvalidationQuery groupByJscode() Group by the strJSCode column
 * @method SysFrmvalidationQuery groupByIsvalidcode() Group by the strIsValidCode column
 * @method SysFrmvalidationQuery groupByOthercode() Group by the strOtherCode column
 * @method SysFrmvalidationQuery groupByDbversionid() Group by the DBVersionID column
 * @method SysFrmvalidationQuery groupByActive() Group by the blnActive column
 * @method SysFrmvalidationQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysFrmvalidationQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysFrmvalidationQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysFrmvalidationQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysFrmvalidationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysFrmvalidationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysFrmvalidationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysFrmvalidation findOne(PropelPDO $con = null) Return the first SysFrmvalidation matching the query
 * @method SysFrmvalidation findOneOrCreate(PropelPDO $con = null) Return the first SysFrmvalidation matching the query, or a new SysFrmvalidation object populated from the query conditions when no match is found
 *
 * @method SysFrmvalidation findOneByFrmvalidationId(string $frmvalidation_id) Return the first SysFrmvalidation filtered by the frmvalidation_id column
 * @method SysFrmvalidation findOneByName(string $strName) Return the first SysFrmvalidation filtered by the strName column
 * @method SysFrmvalidation findOneByClassname(string $strClassName) Return the first SysFrmvalidation filtered by the strClassName column
 * @method SysFrmvalidation findOneByVariables(string $strVariables) Return the first SysFrmvalidation filtered by the strVariables column
 * @method SysFrmvalidation findOneByJscode(string $strJSCode) Return the first SysFrmvalidation filtered by the strJSCode column
 * @method SysFrmvalidation findOneByIsvalidcode(string $strIsValidCode) Return the first SysFrmvalidation filtered by the strIsValidCode column
 * @method SysFrmvalidation findOneByOthercode(string $strOtherCode) Return the first SysFrmvalidation filtered by the strOtherCode column
 * @method SysFrmvalidation findOneByDbversionid(string $DBVersionID) Return the first SysFrmvalidation filtered by the DBVersionID column
 * @method SysFrmvalidation findOneByActive(int $blnActive) Return the first SysFrmvalidation filtered by the blnActive column
 * @method SysFrmvalidation findOneByCreatedby(string $intCreatedBy) Return the first SysFrmvalidation filtered by the intCreatedBy column
 * @method SysFrmvalidation findOneByModifiedby(string $intModifiedBy) Return the first SysFrmvalidation filtered by the intModifiedBy column
 * @method SysFrmvalidation findOneByCreateddate(string $dtCreatedDate) Return the first SysFrmvalidation filtered by the dtCreatedDate column
 * @method SysFrmvalidation findOneByModifieddate(string $dtModifiedDate) Return the first SysFrmvalidation filtered by the dtModifiedDate column
 *
 * @method array findByFrmvalidationId(string $frmvalidation_id) Return SysFrmvalidation objects filtered by the frmvalidation_id column
 * @method array findByName(string $strName) Return SysFrmvalidation objects filtered by the strName column
 * @method array findByClassname(string $strClassName) Return SysFrmvalidation objects filtered by the strClassName column
 * @method array findByVariables(string $strVariables) Return SysFrmvalidation objects filtered by the strVariables column
 * @method array findByJscode(string $strJSCode) Return SysFrmvalidation objects filtered by the strJSCode column
 * @method array findByIsvalidcode(string $strIsValidCode) Return SysFrmvalidation objects filtered by the strIsValidCode column
 * @method array findByOthercode(string $strOtherCode) Return SysFrmvalidation objects filtered by the strOtherCode column
 * @method array findByDbversionid(string $DBVersionID) Return SysFrmvalidation objects filtered by the DBVersionID column
 * @method array findByActive(int $blnActive) Return SysFrmvalidation objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysFrmvalidation objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysFrmvalidation objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysFrmvalidation objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysFrmvalidation objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysFrmvalidationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysFrmvalidationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysFrmvalidation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysFrmvalidationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysFrmvalidationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysFrmvalidationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysFrmvalidationQuery) {
            return $criteria;
        }
        $query = new SysFrmvalidationQuery();
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
     * @return   SysFrmvalidation|SysFrmvalidation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysFrmvalidationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysFrmvalidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysFrmvalidation A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FRMVALIDATION_ID`, `STRNAME`, `STRCLASSNAME`, `STRVARIABLES`, `STRJSCODE`, `STRISVALIDCODE`, `STROTHERCODE`, `DBVERSIONID`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_FrmValidation` WHERE `FRMVALIDATION_ID` = :p0';
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
            $obj = new SysFrmvalidation();
            $obj->hydrate($row);
            SysFrmvalidationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysFrmvalidation|SysFrmvalidation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysFrmvalidation[]|mixed the list of results, formatted by the current formatter
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysFrmvalidationPeer::FRMVALIDATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysFrmvalidationPeer::FRMVALIDATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the frmvalidation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFrmvalidationId(1234); // WHERE frmvalidation_id = 1234
     * $query->filterByFrmvalidationId(array(12, 34)); // WHERE frmvalidation_id IN (12, 34)
     * $query->filterByFrmvalidationId(array('min' => 12)); // WHERE frmvalidation_id > 12
     * </code>
     *
     * @param     mixed $frmvalidationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByFrmvalidationId($frmvalidationId = null, $comparison = null)
    {
        if (is_array($frmvalidationId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::FRMVALIDATION_ID, $frmvalidationId, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysFrmvalidationPeer::STRNAME, $name, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysFrmvalidationPeer::STRCLASSNAME, $classname, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysFrmvalidationPeer::STRVARIABLES, $variables, $comparison);
    }

    /**
     * Filter the query on the strJSCode column
     *
     * Example usage:
     * <code>
     * $query->filterByJscode('fooValue');   // WHERE strJSCode = 'fooValue'
     * $query->filterByJscode('%fooValue%'); // WHERE strJSCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jscode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByJscode($jscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jscode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jscode)) {
                $jscode = str_replace('*', '%', $jscode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::STRJSCODE, $jscode, $comparison);
    }

    /**
     * Filter the query on the strIsValidCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIsvalidcode('fooValue');   // WHERE strIsValidCode = 'fooValue'
     * $query->filterByIsvalidcode('%fooValue%'); // WHERE strIsValidCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isvalidcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByIsvalidcode($isvalidcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isvalidcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isvalidcode)) {
                $isvalidcode = str_replace('*', '%', $isvalidcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::STRISVALIDCODE, $isvalidcode, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysFrmvalidationPeer::STROTHERCODE, $othercode, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByDbversionid($dbversionid = null, $comparison = null)
    {
        if (is_array($dbversionid)) {
            $useMinMax = false;
            if (isset($dbversionid['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DBVERSIONID, $dbversionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dbversionid['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DBVERSIONID, $dbversionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::DBVERSIONID, $dbversionid, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::BLNACTIVE, $active, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysFrmvalidationPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysFrmvalidationPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SysFrmvalidation $sysFrmvalidation Object to remove from the list of results
     *
     * @return SysFrmvalidationQuery The current query, for fluid interface
     */
    public function prune($sysFrmvalidation = null)
    {
        if ($sysFrmvalidation) {
            $this->addUsingAlias(SysFrmvalidationPeer::FRMVALIDATION_ID, $sysFrmvalidation->getFrmvalidationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysFrmvalidationPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysFrmvalidationPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysFrmvalidationPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysFrmvalidationPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysFrmvalidationPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysFrmvalidationQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysFrmvalidationPeer::DTCREATEDDATE);
    }
}
