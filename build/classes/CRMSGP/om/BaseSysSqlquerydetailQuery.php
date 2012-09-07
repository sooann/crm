<?php


/**
 * Base class that represents a query for the 'SYS_SQLQueryDetail' table.
 *
 *
 *
 * @method SysSqlquerydetailQuery orderBySqlquerydetailId($order = Criteria::ASC) Order by the sqlquerydetail_id column
 * @method SysSqlquerydetailQuery orderBySqlqueryId($order = Criteria::ASC) Order by the sqlquery_id column
 * @method SysSqlquerydetailQuery orderByParameter($order = Criteria::ASC) Order by the strParameter column
 * @method SysSqlquerydetailQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysSqlquerydetailQuery orderByType($order = Criteria::ASC) Order by the intType column
 * @method SysSqlquerydetailQuery orderByTypename($order = Criteria::ASC) Order by the strTypeName column
 * @method SysSqlquerydetailQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysSqlquerydetailQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 *
 * @method SysSqlquerydetailQuery groupBySqlquerydetailId() Group by the sqlquerydetail_id column
 * @method SysSqlquerydetailQuery groupBySqlqueryId() Group by the sqlquery_id column
 * @method SysSqlquerydetailQuery groupByParameter() Group by the strParameter column
 * @method SysSqlquerydetailQuery groupByName() Group by the strName column
 * @method SysSqlquerydetailQuery groupByType() Group by the intType column
 * @method SysSqlquerydetailQuery groupByTypename() Group by the strTypeName column
 * @method SysSqlquerydetailQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysSqlquerydetailQuery groupByCreateddate() Group by the dtCreatedDate column
 *
 * @method SysSqlquerydetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysSqlquerydetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysSqlquerydetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysSqlquerydetailQuery leftJoinSysSqlquery($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysSqlquery relation
 * @method SysSqlquerydetailQuery rightJoinSysSqlquery($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysSqlquery relation
 * @method SysSqlquerydetailQuery innerJoinSysSqlquery($relationAlias = null) Adds a INNER JOIN clause to the query using the SysSqlquery relation
 *
 * @method SysSqlquerydetail findOne(PropelPDO $con = null) Return the first SysSqlquerydetail matching the query
 * @method SysSqlquerydetail findOneOrCreate(PropelPDO $con = null) Return the first SysSqlquerydetail matching the query, or a new SysSqlquerydetail object populated from the query conditions when no match is found
 *
 * @method SysSqlquerydetail findOneBySqlquerydetailId(string $sqlquerydetail_id) Return the first SysSqlquerydetail filtered by the sqlquerydetail_id column
 * @method SysSqlquerydetail findOneBySqlqueryId(string $sqlquery_id) Return the first SysSqlquerydetail filtered by the sqlquery_id column
 * @method SysSqlquerydetail findOneByParameter(string $strParameter) Return the first SysSqlquerydetail filtered by the strParameter column
 * @method SysSqlquerydetail findOneByName(string $strName) Return the first SysSqlquerydetail filtered by the strName column
 * @method SysSqlquerydetail findOneByType(int $intType) Return the first SysSqlquerydetail filtered by the intType column
 * @method SysSqlquerydetail findOneByTypename(string $strTypeName) Return the first SysSqlquerydetail filtered by the strTypeName column
 * @method SysSqlquerydetail findOneByCreatedby(string $intCreatedBy) Return the first SysSqlquerydetail filtered by the intCreatedBy column
 * @method SysSqlquerydetail findOneByCreateddate(string $dtCreatedDate) Return the first SysSqlquerydetail filtered by the dtCreatedDate column
 *
 * @method array findBySqlquerydetailId(string $sqlquerydetail_id) Return SysSqlquerydetail objects filtered by the sqlquerydetail_id column
 * @method array findBySqlqueryId(string $sqlquery_id) Return SysSqlquerydetail objects filtered by the sqlquery_id column
 * @method array findByParameter(string $strParameter) Return SysSqlquerydetail objects filtered by the strParameter column
 * @method array findByName(string $strName) Return SysSqlquerydetail objects filtered by the strName column
 * @method array findByType(int $intType) Return SysSqlquerydetail objects filtered by the intType column
 * @method array findByTypename(string $strTypeName) Return SysSqlquerydetail objects filtered by the strTypeName column
 * @method array findByCreatedby(string $intCreatedBy) Return SysSqlquerydetail objects filtered by the intCreatedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysSqlquerydetail objects filtered by the dtCreatedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysSqlquerydetailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysSqlquerydetailQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysSqlquerydetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysSqlquerydetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysSqlquerydetailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysSqlquerydetailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysSqlquerydetailQuery) {
            return $criteria;
        }
        $query = new SysSqlquerydetailQuery();
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
     * @return   SysSqlquerydetail|SysSqlquerydetail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysSqlquerydetailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysSqlquerydetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysSqlquerydetail A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SQLQUERYDETAIL_ID`, `SQLQUERY_ID`, `STRPARAMETER`, `STRNAME`, `INTTYPE`, `STRTYPENAME`, `INTCREATEDBY`, `DTCREATEDDATE` FROM `SYS_SQLQueryDetail` WHERE `SQLQUERYDETAIL_ID` = :p0';
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
            $obj = new SysSqlquerydetail();
            $obj->hydrate($row);
            SysSqlquerydetailPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysSqlquerydetail|SysSqlquerydetail[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysSqlquerydetail[]|mixed the list of results, formatted by the current formatter
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
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sqlquerydetail_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySqlquerydetailId(1234); // WHERE sqlquerydetail_id = 1234
     * $query->filterBySqlquerydetailId(array(12, 34)); // WHERE sqlquerydetail_id IN (12, 34)
     * $query->filterBySqlquerydetailId(array('min' => 12)); // WHERE sqlquerydetail_id > 12
     * </code>
     *
     * @param     mixed $sqlquerydetailId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterBySqlquerydetailId($sqlquerydetailId = null, $comparison = null)
    {
        if (is_array($sqlquerydetailId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $sqlquerydetailId, $comparison);
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
     * @see       filterBySysSqlquery()
     *
     * @param     mixed $sqlqueryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterBySqlqueryId($sqlqueryId = null, $comparison = null)
    {
        if (is_array($sqlqueryId)) {
            $useMinMax = false;
            if (isset($sqlqueryId['min'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERY_ID, $sqlqueryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sqlqueryId['max'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERY_ID, $sqlqueryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERY_ID, $sqlqueryId, $comparison);
    }

    /**
     * Filter the query on the strParameter column
     *
     * Example usage:
     * <code>
     * $query->filterByParameter('fooValue');   // WHERE strParameter = 'fooValue'
     * $query->filterByParameter('%fooValue%'); // WHERE strParameter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByParameter($parameter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parameter)) {
                $parameter = str_replace('*', '%', $parameter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::STRPARAMETER, $parameter, $comparison);
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
     * @return SysSqlquerydetailQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysSqlquerydetailPeer::STRNAME, $name, $comparison);
    }

    /**
     * Filter the query on the intType column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE intType = 1234
     * $query->filterByType(array(12, 34)); // WHERE intType IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE intType > 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::INTTYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::INTTYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::INTTYPE, $type, $comparison);
    }

    /**
     * Filter the query on the strTypeName column
     *
     * Example usage:
     * <code>
     * $query->filterByTypename('fooValue');   // WHERE strTypeName = 'fooValue'
     * $query->filterByTypename('%fooValue%'); // WHERE strTypeName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByTypename($typename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typename)) {
                $typename = str_replace('*', '%', $typename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::STRTYPENAME, $typename, $comparison);
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
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysSqlquerydetailPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysSqlquerydetailPeer::DTCREATEDDATE, $createddate, $comparison);
    }

    /**
     * Filter the query by a related SysSqlquery object
     *
     * @param   SysSqlquery|PropelObjectCollection $sysSqlquery The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysSqlquerydetailQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysSqlquery($sysSqlquery, $comparison = null)
    {
        if ($sysSqlquery instanceof SysSqlquery) {
            return $this
                ->addUsingAlias(SysSqlquerydetailPeer::SQLQUERY_ID, $sysSqlquery->getSqlqueryId(), $comparison);
        } elseif ($sysSqlquery instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SysSqlquerydetailPeer::SQLQUERY_ID, $sysSqlquery->toKeyValue('PrimaryKey', 'SqlqueryId'), $comparison);
        } else {
            throw new PropelException('filterBySysSqlquery() only accepts arguments of type SysSqlquery or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysSqlquery relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function joinSysSqlquery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysSqlquery');

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
            $this->addJoinObject($join, 'SysSqlquery');
        }

        return $this;
    }

    /**
     * Use the SysSqlquery relation SysSqlquery object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SysSqlqueryQuery A secondary query class using the current class as primary query
     */
    public function useSysSqlqueryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSysSqlquery($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysSqlquery', 'SysSqlqueryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SysSqlquerydetail $sysSqlquerydetail Object to remove from the list of results
     *
     * @return SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function prune($sysSqlquerydetail = null)
    {
        if ($sysSqlquerydetail) {
            $this->addUsingAlias(SysSqlquerydetailPeer::SQLQUERYDETAIL_ID, $sysSqlquerydetail->getSqlquerydetailId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysSqlquerydetailPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysSqlquerydetailPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysSqlquerydetailQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysSqlquerydetailPeer::DTCREATEDDATE);
    }
}
