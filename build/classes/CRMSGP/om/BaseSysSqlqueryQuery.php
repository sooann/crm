<?php


/**
 * Base class that represents a query for the 'SYS_SQLQuery' table.
 *
 *
 *
 * @method SysSqlqueryQuery orderBySqlqueryId($order = Criteria::ASC) Order by the sqlquery_id column
 * @method SysSqlqueryQuery orderByStatement($order = Criteria::ASC) Order by the strStatement column
 * @method SysSqlqueryQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysSqlqueryQuery orderByDescription($order = Criteria::ASC) Order by the strDescription column
 * @method SysSqlqueryQuery orderByDbversionid($order = Criteria::ASC) Order by the DBVersionID column
 * @method SysSqlqueryQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysSqlqueryQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysSqlqueryQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysSqlqueryQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysSqlqueryQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysSqlqueryQuery groupBySqlqueryId() Group by the sqlquery_id column
 * @method SysSqlqueryQuery groupByStatement() Group by the strStatement column
 * @method SysSqlqueryQuery groupByName() Group by the strName column
 * @method SysSqlqueryQuery groupByDescription() Group by the strDescription column
 * @method SysSqlqueryQuery groupByDbversionid() Group by the DBVersionID column
 * @method SysSqlqueryQuery groupByActive() Group by the blnActive column
 * @method SysSqlqueryQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysSqlqueryQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysSqlqueryQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysSqlqueryQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysSqlqueryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysSqlqueryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysSqlqueryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysSqlqueryQuery leftJoinSysSqlquerydetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysSqlquerydetail relation
 * @method SysSqlqueryQuery rightJoinSysSqlquerydetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysSqlquerydetail relation
 * @method SysSqlqueryQuery innerJoinSysSqlquerydetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SysSqlquerydetail relation
 *
 * @method SysSqlquery findOne(PropelPDO $con = null) Return the first SysSqlquery matching the query
 * @method SysSqlquery findOneOrCreate(PropelPDO $con = null) Return the first SysSqlquery matching the query, or a new SysSqlquery object populated from the query conditions when no match is found
 *
 * @method SysSqlquery findOneBySqlqueryId(string $sqlquery_id) Return the first SysSqlquery filtered by the sqlquery_id column
 * @method SysSqlquery findOneByStatement(string $strStatement) Return the first SysSqlquery filtered by the strStatement column
 * @method SysSqlquery findOneByName(string $strName) Return the first SysSqlquery filtered by the strName column
 * @method SysSqlquery findOneByDescription(string $strDescription) Return the first SysSqlquery filtered by the strDescription column
 * @method SysSqlquery findOneByDbversionid(string $DBVersionID) Return the first SysSqlquery filtered by the DBVersionID column
 * @method SysSqlquery findOneByActive(int $blnActive) Return the first SysSqlquery filtered by the blnActive column
 * @method SysSqlquery findOneByCreatedby(string $intCreatedBy) Return the first SysSqlquery filtered by the intCreatedBy column
 * @method SysSqlquery findOneByModifiedby(string $intModifiedBy) Return the first SysSqlquery filtered by the intModifiedBy column
 * @method SysSqlquery findOneByCreateddate(string $dtCreatedDate) Return the first SysSqlquery filtered by the dtCreatedDate column
 * @method SysSqlquery findOneByModifieddate(string $dtModifiedDate) Return the first SysSqlquery filtered by the dtModifiedDate column
 *
 * @method array findBySqlqueryId(string $sqlquery_id) Return SysSqlquery objects filtered by the sqlquery_id column
 * @method array findByStatement(string $strStatement) Return SysSqlquery objects filtered by the strStatement column
 * @method array findByName(string $strName) Return SysSqlquery objects filtered by the strName column
 * @method array findByDescription(string $strDescription) Return SysSqlquery objects filtered by the strDescription column
 * @method array findByDbversionid(string $DBVersionID) Return SysSqlquery objects filtered by the DBVersionID column
 * @method array findByActive(int $blnActive) Return SysSqlquery objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysSqlquery objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysSqlquery objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysSqlquery objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysSqlquery objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysSqlqueryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysSqlqueryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysSqlquery', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysSqlqueryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysSqlqueryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysSqlqueryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysSqlqueryQuery) {
            return $criteria;
        }
        $query = new SysSqlqueryQuery();
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
     * @return   SysSqlquery|SysSqlquery[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysSqlqueryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysSqlqueryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysSqlquery A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SQLQUERY_ID`, `STRSTATEMENT`, `STRNAME`, `STRDESCRIPTION`, `DBVERSIONID`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_SQLQuery` WHERE `SQLQUERY_ID` = :p0';
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
            $obj = new SysSqlquery();
            $obj->hydrate($row);
            SysSqlqueryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysSqlquery|SysSqlquery[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysSqlquery[]|mixed the list of results, formatted by the current formatter
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysSqlqueryPeer::SQLQUERY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysSqlqueryPeer::SQLQUERY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sqlquery_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySqlqueryId(1234); // WHERE sqlquery_id = 1234
     * $query->filterBySqlqueryId(array(12, 34)); // WHERE sqlquery_id IN (12, 34)
     * $query->filterBySqlqueryId(array('min' => 12)); // WHERE sqlquery_id > 12
     * </code>
     *
     * @param     mixed $sqlqueryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterBySqlqueryId($sqlqueryId = null, $comparison = null)
    {
        if (is_array($sqlqueryId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysSqlqueryPeer::SQLQUERY_ID, $sqlqueryId, $comparison);
    }

    /**
     * Filter the query on the strStatement column
     *
     * Example usage:
     * <code>
     * $query->filterByStatement('fooValue');   // WHERE strStatement = 'fooValue'
     * $query->filterByStatement('%fooValue%'); // WHERE strStatement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByStatement($statement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statement)) {
                $statement = str_replace('*', '%', $statement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::STRSTATEMENT, $statement, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysSqlqueryPeer::STRNAME, $name, $comparison);
    }

    /**
     * Filter the query on the strDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE strDescription = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE strDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::STRDESCRIPTION, $description, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByDbversionid($dbversionid = null, $comparison = null)
    {
        if (is_array($dbversionid)) {
            $useMinMax = false;
            if (isset($dbversionid['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DBVERSIONID, $dbversionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dbversionid['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DBVERSIONID, $dbversionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::DBVERSIONID, $dbversionid, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::BLNACTIVE, $active, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysSqlqueryPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlqueryPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Filter the query by a related SysSqlquerydetail object
     *
     * @param   SysSqlquerydetail|PropelObjectCollection $sysSqlquerydetail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysSqlqueryQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysSqlquerydetail($sysSqlquerydetail, $comparison = null)
    {
        if ($sysSqlquerydetail instanceof SysSqlquerydetail) {
            return $this
                ->addUsingAlias(SysSqlqueryPeer::SQLQUERY_ID, $sysSqlquerydetail->getSqlqueryId(), $comparison);
        } elseif ($sysSqlquerydetail instanceof PropelObjectCollection) {
            return $this
                ->useSysSqlquerydetailQuery()
                ->filterByPrimaryKeys($sysSqlquerydetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySysSqlquerydetail() only accepts arguments of type SysSqlquerydetail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysSqlquerydetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function joinSysSqlquerydetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysSqlquerydetail');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SysSqlquerydetail');
        }

        return $this;
    }

    /**
     * Use the SysSqlquerydetail relation SysSqlquerydetail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SysSqlquerydetailQuery A secondary query class using the current class as primary query
     */
    public function useSysSqlquerydetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSysSqlquerydetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysSqlquerydetail', 'SysSqlquerydetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SysSqlquery $sysSqlquery Object to remove from the list of results
     *
     * @return SysSqlqueryQuery The current query, for fluid interface
     */
    public function prune($sysSqlquery = null)
    {
        if ($sysSqlquery) {
            $this->addUsingAlias(SysSqlqueryPeer::SQLQUERY_ID, $sysSqlquery->getSqlqueryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysSqlqueryPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysSqlqueryPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysSqlqueryPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysSqlqueryPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysSqlqueryPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysSqlqueryQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysSqlqueryPeer::DTCREATEDDATE);
    }
}
