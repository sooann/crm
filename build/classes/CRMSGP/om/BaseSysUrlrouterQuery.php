<?php


/**
 * Base class that represents a query for the 'SYS_URLRouter' table.
 *
 *
 *
 * @method SysUrlrouterQuery orderByUrlrouterId($order = Criteria::ASC) Order by the urlrouter_id column
 * @method SysUrlrouterQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysUrlrouterQuery orderByPattern($order = Criteria::ASC) Order by the strPattern column
 * @method SysUrlrouterQuery orderByConditions($order = Criteria::ASC) Order by the strConditions column
 * @method SysUrlrouterQuery orderByControllerclass($order = Criteria::ASC) Order by the strControllerClass column
 * @method SysUrlrouterQuery orderByCallable($order = Criteria::ASC) Order by the strCallable column
 * @method SysUrlrouterQuery orderByGet($order = Criteria::ASC) Order by the blnGet column
 * @method SysUrlrouterQuery orderByPost($order = Criteria::ASC) Order by the blnPost column
 * @method SysUrlrouterQuery orderByOrder($order = Criteria::ASC) Order by the intOrder column
 * @method SysUrlrouterQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysUrlrouterQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysUrlrouterQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysUrlrouterQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysUrlrouterQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysUrlrouterQuery groupByUrlrouterId() Group by the urlrouter_id column
 * @method SysUrlrouterQuery groupByName() Group by the strName column
 * @method SysUrlrouterQuery groupByPattern() Group by the strPattern column
 * @method SysUrlrouterQuery groupByConditions() Group by the strConditions column
 * @method SysUrlrouterQuery groupByControllerclass() Group by the strControllerClass column
 * @method SysUrlrouterQuery groupByCallable() Group by the strCallable column
 * @method SysUrlrouterQuery groupByGet() Group by the blnGet column
 * @method SysUrlrouterQuery groupByPost() Group by the blnPost column
 * @method SysUrlrouterQuery groupByOrder() Group by the intOrder column
 * @method SysUrlrouterQuery groupByActive() Group by the blnActive column
 * @method SysUrlrouterQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysUrlrouterQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysUrlrouterQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysUrlrouterQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysUrlrouterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysUrlrouterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysUrlrouterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysUrlrouter findOne(PropelPDO $con = null) Return the first SysUrlrouter matching the query
 * @method SysUrlrouter findOneOrCreate(PropelPDO $con = null) Return the first SysUrlrouter matching the query, or a new SysUrlrouter object populated from the query conditions when no match is found
 *
 * @method SysUrlrouter findOneByUrlrouterId(string $urlrouter_id) Return the first SysUrlrouter filtered by the urlrouter_id column
 * @method SysUrlrouter findOneByName(string $strName) Return the first SysUrlrouter filtered by the strName column
 * @method SysUrlrouter findOneByPattern(string $strPattern) Return the first SysUrlrouter filtered by the strPattern column
 * @method SysUrlrouter findOneByConditions(string $strConditions) Return the first SysUrlrouter filtered by the strConditions column
 * @method SysUrlrouter findOneByControllerclass(string $strControllerClass) Return the first SysUrlrouter filtered by the strControllerClass column
 * @method SysUrlrouter findOneByCallable(string $strCallable) Return the first SysUrlrouter filtered by the strCallable column
 * @method SysUrlrouter findOneByGet(int $blnGet) Return the first SysUrlrouter filtered by the blnGet column
 * @method SysUrlrouter findOneByPost(int $blnPost) Return the first SysUrlrouter filtered by the blnPost column
 * @method SysUrlrouter findOneByOrder(int $intOrder) Return the first SysUrlrouter filtered by the intOrder column
 * @method SysUrlrouter findOneByActive(int $blnActive) Return the first SysUrlrouter filtered by the blnActive column
 * @method SysUrlrouter findOneByCreatedby(string $intCreatedBy) Return the first SysUrlrouter filtered by the intCreatedBy column
 * @method SysUrlrouter findOneByModifiedby(string $intModifiedBy) Return the first SysUrlrouter filtered by the intModifiedBy column
 * @method SysUrlrouter findOneByCreateddate(string $dtCreatedDate) Return the first SysUrlrouter filtered by the dtCreatedDate column
 * @method SysUrlrouter findOneByModifieddate(string $dtModifiedDate) Return the first SysUrlrouter filtered by the dtModifiedDate column
 *
 * @method array findByUrlrouterId(string $urlrouter_id) Return SysUrlrouter objects filtered by the urlrouter_id column
 * @method array findByName(string $strName) Return SysUrlrouter objects filtered by the strName column
 * @method array findByPattern(string $strPattern) Return SysUrlrouter objects filtered by the strPattern column
 * @method array findByConditions(string $strConditions) Return SysUrlrouter objects filtered by the strConditions column
 * @method array findByControllerclass(string $strControllerClass) Return SysUrlrouter objects filtered by the strControllerClass column
 * @method array findByCallable(string $strCallable) Return SysUrlrouter objects filtered by the strCallable column
 * @method array findByGet(int $blnGet) Return SysUrlrouter objects filtered by the blnGet column
 * @method array findByPost(int $blnPost) Return SysUrlrouter objects filtered by the blnPost column
 * @method array findByOrder(int $intOrder) Return SysUrlrouter objects filtered by the intOrder column
 * @method array findByActive(int $blnActive) Return SysUrlrouter objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysUrlrouter objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysUrlrouter objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysUrlrouter objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysUrlrouter objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysUrlrouterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysUrlrouterQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysUrlrouter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysUrlrouterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysUrlrouterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysUrlrouterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysUrlrouterQuery) {
            return $criteria;
        }
        $query = new SysUrlrouterQuery();
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
     * @return   SysUrlrouter|SysUrlrouter[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysUrlrouterPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysUrlrouterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysUrlrouter A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `URLROUTER_ID`, `STRNAME`, `STRPATTERN`, `STRCONDITIONS`, `STRCONTROLLERCLASS`, `STRCALLABLE`, `BLNGET`, `BLNPOST`, `INTORDER`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_URLRouter` WHERE `URLROUTER_ID` = :p0';
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
            $obj = new SysUrlrouter();
            $obj->hydrate($row);
            SysUrlrouterPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysUrlrouter|SysUrlrouter[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysUrlrouter[]|mixed the list of results, formatted by the current formatter
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysUrlrouterPeer::URLROUTER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysUrlrouterPeer::URLROUTER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the urlrouter_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlrouterId(1234); // WHERE urlrouter_id = 1234
     * $query->filterByUrlrouterId(array(12, 34)); // WHERE urlrouter_id IN (12, 34)
     * $query->filterByUrlrouterId(array('min' => 12)); // WHERE urlrouter_id > 12
     * </code>
     *
     * @param     mixed $urlrouterId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByUrlrouterId($urlrouterId = null, $comparison = null)
    {
        if (is_array($urlrouterId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysUrlrouterPeer::URLROUTER_ID, $urlrouterId, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysUrlrouterPeer::STRNAME, $name, $comparison);
    }

    /**
     * Filter the query on the strPattern column
     *
     * Example usage:
     * <code>
     * $query->filterByPattern('fooValue');   // WHERE strPattern = 'fooValue'
     * $query->filterByPattern('%fooValue%'); // WHERE strPattern LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByPattern($pattern = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pattern)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pattern)) {
                $pattern = str_replace('*', '%', $pattern);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::STRPATTERN, $pattern, $comparison);
    }

    /**
     * Filter the query on the strConditions column
     *
     * Example usage:
     * <code>
     * $query->filterByConditions('fooValue');   // WHERE strConditions = 'fooValue'
     * $query->filterByConditions('%fooValue%'); // WHERE strConditions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByConditions($conditions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditions)) {
                $conditions = str_replace('*', '%', $conditions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::STRCONDITIONS, $conditions, $comparison);
    }

    /**
     * Filter the query on the strControllerClass column
     *
     * Example usage:
     * <code>
     * $query->filterByControllerclass('fooValue');   // WHERE strControllerClass = 'fooValue'
     * $query->filterByControllerclass('%fooValue%'); // WHERE strControllerClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $controllerclass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByControllerclass($controllerclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($controllerclass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $controllerclass)) {
                $controllerclass = str_replace('*', '%', $controllerclass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::STRCONTROLLERCLASS, $controllerclass, $comparison);
    }

    /**
     * Filter the query on the strCallable column
     *
     * Example usage:
     * <code>
     * $query->filterByCallable('fooValue');   // WHERE strCallable = 'fooValue'
     * $query->filterByCallable('%fooValue%'); // WHERE strCallable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $callable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByCallable($callable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($callable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $callable)) {
                $callable = str_replace('*', '%', $callable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::STRCALLABLE, $callable, $comparison);
    }

    /**
     * Filter the query on the blnGet column
     *
     * Example usage:
     * <code>
     * $query->filterByGet(1234); // WHERE blnGet = 1234
     * $query->filterByGet(array(12, 34)); // WHERE blnGet IN (12, 34)
     * $query->filterByGet(array('min' => 12)); // WHERE blnGet > 12
     * </code>
     *
     * @param     mixed $get The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByGet($get = null, $comparison = null)
    {
        if (is_array($get)) {
            $useMinMax = false;
            if (isset($get['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNGET, $get['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($get['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNGET, $get['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::BLNGET, $get, $comparison);
    }

    /**
     * Filter the query on the blnPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPost(1234); // WHERE blnPost = 1234
     * $query->filterByPost(array(12, 34)); // WHERE blnPost IN (12, 34)
     * $query->filterByPost(array('min' => 12)); // WHERE blnPost > 12
     * </code>
     *
     * @param     mixed $post The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByPost($post = null, $comparison = null)
    {
        if (is_array($post)) {
            $useMinMax = false;
            if (isset($post['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNPOST, $post['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($post['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNPOST, $post['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::BLNPOST, $post, $comparison);
    }

    /**
     * Filter the query on the intOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder(1234); // WHERE intOrder = 1234
     * $query->filterByOrder(array(12, 34)); // WHERE intOrder IN (12, 34)
     * $query->filterByOrder(array('min' => 12)); // WHERE intOrder > 12
     * </code>
     *
     * @param     mixed $order The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::INTORDER, $order, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::BLNACTIVE, $active, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysUrlrouterPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysUrlrouterPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysUrlrouterPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SysUrlrouter $sysUrlrouter Object to remove from the list of results
     *
     * @return SysUrlrouterQuery The current query, for fluid interface
     */
    public function prune($sysUrlrouter = null)
    {
        if ($sysUrlrouter) {
            $this->addUsingAlias(SysUrlrouterPeer::URLROUTER_ID, $sysUrlrouter->getUrlrouterId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysUrlrouterPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysUrlrouterPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysUrlrouterPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysUrlrouterPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysUrlrouterPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysUrlrouterQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysUrlrouterPeer::DTCREATEDDATE);
    }
}
