<?php


/**
 * Base class that represents a query for the 'SYS_Declaration' table.
 *
 *
 *
 * @method SysDeclarationQuery orderByDeclarationId($order = Criteria::ASC) Order by the declaration_id column
 * @method SysDeclarationQuery orderByCode($order = Criteria::ASC) Order by the strCode column
 * @method SysDeclarationQuery orderByHtml($order = Criteria::ASC) Order by the strHtml column
 * @method SysDeclarationQuery orderByType($order = Criteria::ASC) Order by the strType column
 * @method SysDeclarationQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysDeclarationQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysDeclarationQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysDeclarationQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysDeclarationQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysDeclarationQuery groupByDeclarationId() Group by the declaration_id column
 * @method SysDeclarationQuery groupByCode() Group by the strCode column
 * @method SysDeclarationQuery groupByHtml() Group by the strHtml column
 * @method SysDeclarationQuery groupByType() Group by the strType column
 * @method SysDeclarationQuery groupByActive() Group by the blnActive column
 * @method SysDeclarationQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysDeclarationQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysDeclarationQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysDeclarationQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysDeclarationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysDeclarationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysDeclarationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysDeclaration findOne(PropelPDO $con = null) Return the first SysDeclaration matching the query
 * @method SysDeclaration findOneOrCreate(PropelPDO $con = null) Return the first SysDeclaration matching the query, or a new SysDeclaration object populated from the query conditions when no match is found
 *
 * @method SysDeclaration findOneByDeclarationId(string $declaration_id) Return the first SysDeclaration filtered by the declaration_id column
 * @method SysDeclaration findOneByCode(string $strCode) Return the first SysDeclaration filtered by the strCode column
 * @method SysDeclaration findOneByHtml(string $strHtml) Return the first SysDeclaration filtered by the strHtml column
 * @method SysDeclaration findOneByType(string $strType) Return the first SysDeclaration filtered by the strType column
 * @method SysDeclaration findOneByActive(int $blnActive) Return the first SysDeclaration filtered by the blnActive column
 * @method SysDeclaration findOneByCreatedby(string $intCreatedBy) Return the first SysDeclaration filtered by the intCreatedBy column
 * @method SysDeclaration findOneByModifiedby(string $intModifiedBy) Return the first SysDeclaration filtered by the intModifiedBy column
 * @method SysDeclaration findOneByCreateddate(string $dtCreatedDate) Return the first SysDeclaration filtered by the dtCreatedDate column
 * @method SysDeclaration findOneByModifieddate(string $dtModifiedDate) Return the first SysDeclaration filtered by the dtModifiedDate column
 *
 * @method array findByDeclarationId(string $declaration_id) Return SysDeclaration objects filtered by the declaration_id column
 * @method array findByCode(string $strCode) Return SysDeclaration objects filtered by the strCode column
 * @method array findByHtml(string $strHtml) Return SysDeclaration objects filtered by the strHtml column
 * @method array findByType(string $strType) Return SysDeclaration objects filtered by the strType column
 * @method array findByActive(int $blnActive) Return SysDeclaration objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysDeclaration objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysDeclaration objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysDeclaration objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysDeclaration objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysDeclarationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysDeclarationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysDeclaration', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysDeclarationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysDeclarationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysDeclarationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysDeclarationQuery) {
            return $criteria;
        }
        $query = new SysDeclarationQuery();
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
     * @return   SysDeclaration|SysDeclaration[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysDeclarationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysDeclarationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysDeclaration A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `DECLARATION_ID`, `STRCODE`, `STRHTML`, `STRTYPE`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_Declaration` WHERE `DECLARATION_ID` = :p0';
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
            $obj = new SysDeclaration();
            $obj->hydrate($row);
            SysDeclarationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysDeclaration|SysDeclaration[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysDeclaration[]|mixed the list of results, formatted by the current formatter
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysDeclarationPeer::DECLARATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysDeclarationPeer::DECLARATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the declaration_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDeclarationId(1234); // WHERE declaration_id = 1234
     * $query->filterByDeclarationId(array(12, 34)); // WHERE declaration_id IN (12, 34)
     * $query->filterByDeclarationId(array('min' => 12)); // WHERE declaration_id > 12
     * </code>
     *
     * @param     mixed $declarationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByDeclarationId($declarationId = null, $comparison = null)
    {
        if (is_array($declarationId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysDeclarationPeer::DECLARATION_ID, $declarationId, $comparison);
    }

    /**
     * Filter the query on the strCode column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE strCode = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE strCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::STRCODE, $code, $comparison);
    }

    /**
     * Filter the query on the strHtml column
     *
     * Example usage:
     * <code>
     * $query->filterByHtml('fooValue');   // WHERE strHtml = 'fooValue'
     * $query->filterByHtml('%fooValue%'); // WHERE strHtml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $html The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByHtml($html = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($html)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $html)) {
                $html = str_replace('*', '%', $html);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::STRHTML, $html, $comparison);
    }

    /**
     * Filter the query on the strType column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE strType = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE strType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::STRTYPE, $type, $comparison);
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysDeclarationPeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysDeclarationPeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::BLNACTIVE, $active, $comparison);
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysDeclarationPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysDeclarationPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysDeclarationPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysDeclarationPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysDeclarationPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysDeclarationPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysDeclarationPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysDeclarationPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysDeclarationPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SysDeclaration $sysDeclaration Object to remove from the list of results
     *
     * @return SysDeclarationQuery The current query, for fluid interface
     */
    public function prune($sysDeclaration = null)
    {
        if ($sysDeclaration) {
            $this->addUsingAlias(SysDeclarationPeer::DECLARATION_ID, $sysDeclaration->getDeclarationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysDeclarationPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysDeclarationPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysDeclarationPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysDeclarationPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysDeclarationPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysDeclarationQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysDeclarationPeer::DTCREATEDDATE);
    }
}
