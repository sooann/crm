<?php


/**
 * Base class that represents a query for the 'SEC_SQLAudit' table.
 *
 *
 *
 * @method SecSqlauditQuery orderBySqlauditId($order = Criteria::ASC) Order by the sqlaudit_id column
 * @method SecSqlauditQuery orderBySqlstatement($order = Criteria::ASC) Order by the strSQLStatement column
 * @method SecSqlauditQuery orderByParameters($order = Criteria::ASC) Order by the strParameters column
 * @method SecSqlauditQuery orderByPageurl($order = Criteria::ASC) Order by the strPageURL column
 * @method SecSqlauditQuery orderByRecordid($order = Criteria::ASC) Order by the intRecordID column
 * @method SecSqlauditQuery orderByVersionid($order = Criteria::ASC) Order by the intVersionID column
 * @method SecSqlauditQuery orderByStartdate($order = Criteria::ASC) Order by the dtStartDate column
 * @method SecSqlauditQuery orderByEnddate($order = Criteria::ASC) Order by the dtEndDate column
 * @method SecSqlauditQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SecSqlauditQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 *
 * @method SecSqlauditQuery groupBySqlauditId() Group by the sqlaudit_id column
 * @method SecSqlauditQuery groupBySqlstatement() Group by the strSQLStatement column
 * @method SecSqlauditQuery groupByParameters() Group by the strParameters column
 * @method SecSqlauditQuery groupByPageurl() Group by the strPageURL column
 * @method SecSqlauditQuery groupByRecordid() Group by the intRecordID column
 * @method SecSqlauditQuery groupByVersionid() Group by the intVersionID column
 * @method SecSqlauditQuery groupByStartdate() Group by the dtStartDate column
 * @method SecSqlauditQuery groupByEnddate() Group by the dtEndDate column
 * @method SecSqlauditQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SecSqlauditQuery groupByCreateddate() Group by the dtCreatedDate column
 *
 * @method SecSqlauditQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SecSqlauditQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SecSqlauditQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SecSqlaudit findOne(PropelPDO $con = null) Return the first SecSqlaudit matching the query
 * @method SecSqlaudit findOneOrCreate(PropelPDO $con = null) Return the first SecSqlaudit matching the query, or a new SecSqlaudit object populated from the query conditions when no match is found
 *
 * @method SecSqlaudit findOneBySqlauditId(string $sqlaudit_id) Return the first SecSqlaudit filtered by the sqlaudit_id column
 * @method SecSqlaudit findOneBySqlstatement(string $strSQLStatement) Return the first SecSqlaudit filtered by the strSQLStatement column
 * @method SecSqlaudit findOneByParameters(string $strParameters) Return the first SecSqlaudit filtered by the strParameters column
 * @method SecSqlaudit findOneByPageurl(string $strPageURL) Return the first SecSqlaudit filtered by the strPageURL column
 * @method SecSqlaudit findOneByRecordid(string $intRecordID) Return the first SecSqlaudit filtered by the intRecordID column
 * @method SecSqlaudit findOneByVersionid(string $intVersionID) Return the first SecSqlaudit filtered by the intVersionID column
 * @method SecSqlaudit findOneByStartdate(string $dtStartDate) Return the first SecSqlaudit filtered by the dtStartDate column
 * @method SecSqlaudit findOneByEnddate(string $dtEndDate) Return the first SecSqlaudit filtered by the dtEndDate column
 * @method SecSqlaudit findOneByCreatedby(string $intCreatedBy) Return the first SecSqlaudit filtered by the intCreatedBy column
 * @method SecSqlaudit findOneByCreateddate(string $dtCreatedDate) Return the first SecSqlaudit filtered by the dtCreatedDate column
 *
 * @method array findBySqlauditId(string $sqlaudit_id) Return SecSqlaudit objects filtered by the sqlaudit_id column
 * @method array findBySqlstatement(string $strSQLStatement) Return SecSqlaudit objects filtered by the strSQLStatement column
 * @method array findByParameters(string $strParameters) Return SecSqlaudit objects filtered by the strParameters column
 * @method array findByPageurl(string $strPageURL) Return SecSqlaudit objects filtered by the strPageURL column
 * @method array findByRecordid(string $intRecordID) Return SecSqlaudit objects filtered by the intRecordID column
 * @method array findByVersionid(string $intVersionID) Return SecSqlaudit objects filtered by the intVersionID column
 * @method array findByStartdate(string $dtStartDate) Return SecSqlaudit objects filtered by the dtStartDate column
 * @method array findByEnddate(string $dtEndDate) Return SecSqlaudit objects filtered by the dtEndDate column
 * @method array findByCreatedby(string $intCreatedBy) Return SecSqlaudit objects filtered by the intCreatedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SecSqlaudit objects filtered by the dtCreatedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSecSqlauditQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSecSqlauditQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SecSqlaudit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SecSqlauditQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SecSqlauditQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SecSqlauditQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SecSqlauditQuery) {
            return $criteria;
        }
        $query = new SecSqlauditQuery();
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
     * @return   SecSqlaudit|SecSqlaudit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SecSqlauditPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SecSqlauditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SecSqlaudit A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SQLAUDIT_ID`, `STRSQLSTATEMENT`, `STRPARAMETERS`, `STRPAGEURL`, `INTRECORDID`, `INTVERSIONID`, `DTSTARTDATE`, `DTENDDATE`, `INTCREATEDBY`, `DTCREATEDDATE` FROM `SEC_SQLAudit` WHERE `SQLAUDIT_ID` = :p0';
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
            $obj = new SecSqlaudit();
            $obj->hydrate($row);
            SecSqlauditPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SecSqlaudit|SecSqlaudit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SecSqlaudit[]|mixed the list of results, formatted by the current formatter
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
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SecSqlauditPeer::SQLAUDIT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SecSqlauditPeer::SQLAUDIT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sqlaudit_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySqlauditId(1234); // WHERE sqlaudit_id = 1234
     * $query->filterBySqlauditId(array(12, 34)); // WHERE sqlaudit_id IN (12, 34)
     * $query->filterBySqlauditId(array('min' => 12)); // WHERE sqlaudit_id > 12
     * </code>
     *
     * @param     mixed $sqlauditId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterBySqlauditId($sqlauditId = null, $comparison = null)
    {
        if (is_array($sqlauditId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SecSqlauditPeer::SQLAUDIT_ID, $sqlauditId, $comparison);
    }

    /**
     * Filter the query on the strSQLStatement column
     *
     * Example usage:
     * <code>
     * $query->filterBySqlstatement('fooValue');   // WHERE strSQLStatement = 'fooValue'
     * $query->filterBySqlstatement('%fooValue%'); // WHERE strSQLStatement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sqlstatement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterBySqlstatement($sqlstatement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sqlstatement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sqlstatement)) {
                $sqlstatement = str_replace('*', '%', $sqlstatement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::STRSQLSTATEMENT, $sqlstatement, $comparison);
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
     * @return SecSqlauditQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SecSqlauditPeer::STRPARAMETERS, $parameters, $comparison);
    }

    /**
     * Filter the query on the strPageURL column
     *
     * Example usage:
     * <code>
     * $query->filterByPageurl('fooValue');   // WHERE strPageURL = 'fooValue'
     * $query->filterByPageurl('%fooValue%'); // WHERE strPageURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pageurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByPageurl($pageurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pageurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pageurl)) {
                $pageurl = str_replace('*', '%', $pageurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::STRPAGEURL, $pageurl, $comparison);
    }

    /**
     * Filter the query on the intRecordID column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordid(1234); // WHERE intRecordID = 1234
     * $query->filterByRecordid(array(12, 34)); // WHERE intRecordID IN (12, 34)
     * $query->filterByRecordid(array('min' => 12)); // WHERE intRecordID > 12
     * </code>
     *
     * @param     mixed $recordid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByRecordid($recordid = null, $comparison = null)
    {
        if (is_array($recordid)) {
            $useMinMax = false;
            if (isset($recordid['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTRECORDID, $recordid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordid['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTRECORDID, $recordid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::INTRECORDID, $recordid, $comparison);
    }

    /**
     * Filter the query on the intVersionID column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionid(1234); // WHERE intVersionID = 1234
     * $query->filterByVersionid(array(12, 34)); // WHERE intVersionID IN (12, 34)
     * $query->filterByVersionid(array('min' => 12)); // WHERE intVersionID > 12
     * </code>
     *
     * @param     mixed $versionid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByVersionid($versionid = null, $comparison = null)
    {
        if (is_array($versionid)) {
            $useMinMax = false;
            if (isset($versionid['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTVERSIONID, $versionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versionid['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTVERSIONID, $versionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::INTVERSIONID, $versionid, $comparison);
    }

    /**
     * Filter the query on the dtStartDate column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdate('2011-03-14'); // WHERE dtStartDate = '2011-03-14'
     * $query->filterByStartdate('now'); // WHERE dtStartDate = '2011-03-14'
     * $query->filterByStartdate(array('max' => 'yesterday')); // WHERE dtStartDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $startdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByStartdate($startdate = null, $comparison = null)
    {
        if (is_array($startdate)) {
            $useMinMax = false;
            if (isset($startdate['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTSTARTDATE, $startdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdate['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTSTARTDATE, $startdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::DTSTARTDATE, $startdate, $comparison);
    }

    /**
     * Filter the query on the dtEndDate column
     *
     * Example usage:
     * <code>
     * $query->filterByEnddate('2011-03-14'); // WHERE dtEndDate = '2011-03-14'
     * $query->filterByEnddate('now'); // WHERE dtEndDate = '2011-03-14'
     * $query->filterByEnddate(array('max' => 'yesterday')); // WHERE dtEndDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $enddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByEnddate($enddate = null, $comparison = null)
    {
        if (is_array($enddate)) {
            $useMinMax = false;
            if (isset($enddate['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTENDDATE, $enddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enddate['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTENDDATE, $enddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::DTENDDATE, $enddate, $comparison);
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
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SecSqlauditPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecSqlauditPeer::DTCREATEDDATE, $createddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SecSqlaudit $secSqlaudit Object to remove from the list of results
     *
     * @return SecSqlauditQuery The current query, for fluid interface
     */
    public function prune($secSqlaudit = null)
    {
        if ($secSqlaudit) {
            $this->addUsingAlias(SecSqlauditPeer::SQLAUDIT_ID, $secSqlaudit->getSqlauditId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SecSqlauditQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SecSqlauditPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SecSqlauditQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SecSqlauditPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SecSqlauditQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SecSqlauditPeer::DTCREATEDDATE);
    }
}
