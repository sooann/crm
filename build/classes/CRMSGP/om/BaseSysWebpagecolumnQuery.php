<?php


/**
 * Base class that represents a query for the 'SYS_WebpageColumn' table.
 *
 *
 *
 * @method SysWebpagecolumnQuery orderByWebpagecolumnId($order = Criteria::ASC) Order by the webpagecolumn_id column
 * @method SysWebpagecolumnQuery orderByWebpageId($order = Criteria::ASC) Order by the webpage_id column
 * @method SysWebpagecolumnQuery orderByQueryorder($order = Criteria::ASC) Order by the intQueryOrder column
 * @method SysWebpagecolumnQuery orderByQuerycolumn($order = Criteria::ASC) Order by the strQueryColumn column
 * @method SysWebpagecolumnQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysWebpagecolumnQuery orderByDatatype($order = Criteria::ASC) Order by the strDataType column
 * @method SysWebpagecolumnQuery orderByOrder($order = Criteria::ASC) Order by the intOrder column
 * @method SysWebpagecolumnQuery orderByDisplay($order = Criteria::ASC) Order by the blnDisplay column
 * @method SysWebpagecolumnQuery orderByHidden($order = Criteria::ASC) Order by the blnHidden column
 * @method SysWebpagecolumnQuery orderByHide($order = Criteria::ASC) Order by the blnHide column
 * @method SysWebpagecolumnQuery orderBySearch($order = Criteria::ASC) Order by the blnSearch column
 * @method SysWebpagecolumnQuery orderByPrikey($order = Criteria::ASC) Order by the blnPriKey column
 * @method SysWebpagecolumnQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysWebpagecolumnQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysWebpagecolumnQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysWebpagecolumnQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysWebpagecolumnQuery groupByWebpagecolumnId() Group by the webpagecolumn_id column
 * @method SysWebpagecolumnQuery groupByWebpageId() Group by the webpage_id column
 * @method SysWebpagecolumnQuery groupByQueryorder() Group by the intQueryOrder column
 * @method SysWebpagecolumnQuery groupByQuerycolumn() Group by the strQueryColumn column
 * @method SysWebpagecolumnQuery groupByName() Group by the strName column
 * @method SysWebpagecolumnQuery groupByDatatype() Group by the strDataType column
 * @method SysWebpagecolumnQuery groupByOrder() Group by the intOrder column
 * @method SysWebpagecolumnQuery groupByDisplay() Group by the blnDisplay column
 * @method SysWebpagecolumnQuery groupByHidden() Group by the blnHidden column
 * @method SysWebpagecolumnQuery groupByHide() Group by the blnHide column
 * @method SysWebpagecolumnQuery groupBySearch() Group by the blnSearch column
 * @method SysWebpagecolumnQuery groupByPrikey() Group by the blnPriKey column
 * @method SysWebpagecolumnQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysWebpagecolumnQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysWebpagecolumnQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysWebpagecolumnQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysWebpagecolumnQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysWebpagecolumnQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysWebpagecolumnQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysWebpagecolumnQuery leftJoinSysWebpage($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysWebpage relation
 * @method SysWebpagecolumnQuery rightJoinSysWebpage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysWebpage relation
 * @method SysWebpagecolumnQuery innerJoinSysWebpage($relationAlias = null) Adds a INNER JOIN clause to the query using the SysWebpage relation
 *
 * @method SysWebpagecolumn findOne(PropelPDO $con = null) Return the first SysWebpagecolumn matching the query
 * @method SysWebpagecolumn findOneOrCreate(PropelPDO $con = null) Return the first SysWebpagecolumn matching the query, or a new SysWebpagecolumn object populated from the query conditions when no match is found
 *
 * @method SysWebpagecolumn findOneByWebpagecolumnId(string $webpagecolumn_id) Return the first SysWebpagecolumn filtered by the webpagecolumn_id column
 * @method SysWebpagecolumn findOneByWebpageId(string $webpage_id) Return the first SysWebpagecolumn filtered by the webpage_id column
 * @method SysWebpagecolumn findOneByQueryorder(int $intQueryOrder) Return the first SysWebpagecolumn filtered by the intQueryOrder column
 * @method SysWebpagecolumn findOneByQuerycolumn(string $strQueryColumn) Return the first SysWebpagecolumn filtered by the strQueryColumn column
 * @method SysWebpagecolumn findOneByName(string $strName) Return the first SysWebpagecolumn filtered by the strName column
 * @method SysWebpagecolumn findOneByDatatype(string $strDataType) Return the first SysWebpagecolumn filtered by the strDataType column
 * @method SysWebpagecolumn findOneByOrder(int $intOrder) Return the first SysWebpagecolumn filtered by the intOrder column
 * @method SysWebpagecolumn findOneByDisplay(int $blnDisplay) Return the first SysWebpagecolumn filtered by the blnDisplay column
 * @method SysWebpagecolumn findOneByHidden(int $blnHidden) Return the first SysWebpagecolumn filtered by the blnHidden column
 * @method SysWebpagecolumn findOneByHide(int $blnHide) Return the first SysWebpagecolumn filtered by the blnHide column
 * @method SysWebpagecolumn findOneBySearch(int $blnSearch) Return the first SysWebpagecolumn filtered by the blnSearch column
 * @method SysWebpagecolumn findOneByPrikey(int $blnPriKey) Return the first SysWebpagecolumn filtered by the blnPriKey column
 * @method SysWebpagecolumn findOneByCreatedby(string $intCreatedBy) Return the first SysWebpagecolumn filtered by the intCreatedBy column
 * @method SysWebpagecolumn findOneByModifiedby(string $intModifiedBy) Return the first SysWebpagecolumn filtered by the intModifiedBy column
 * @method SysWebpagecolumn findOneByCreateddate(string $dtCreatedDate) Return the first SysWebpagecolumn filtered by the dtCreatedDate column
 * @method SysWebpagecolumn findOneByModifieddate(string $dtModifiedDate) Return the first SysWebpagecolumn filtered by the dtModifiedDate column
 *
 * @method array findByWebpagecolumnId(string $webpagecolumn_id) Return SysWebpagecolumn objects filtered by the webpagecolumn_id column
 * @method array findByWebpageId(string $webpage_id) Return SysWebpagecolumn objects filtered by the webpage_id column
 * @method array findByQueryorder(int $intQueryOrder) Return SysWebpagecolumn objects filtered by the intQueryOrder column
 * @method array findByQuerycolumn(string $strQueryColumn) Return SysWebpagecolumn objects filtered by the strQueryColumn column
 * @method array findByName(string $strName) Return SysWebpagecolumn objects filtered by the strName column
 * @method array findByDatatype(string $strDataType) Return SysWebpagecolumn objects filtered by the strDataType column
 * @method array findByOrder(int $intOrder) Return SysWebpagecolumn objects filtered by the intOrder column
 * @method array findByDisplay(int $blnDisplay) Return SysWebpagecolumn objects filtered by the blnDisplay column
 * @method array findByHidden(int $blnHidden) Return SysWebpagecolumn objects filtered by the blnHidden column
 * @method array findByHide(int $blnHide) Return SysWebpagecolumn objects filtered by the blnHide column
 * @method array findBySearch(int $blnSearch) Return SysWebpagecolumn objects filtered by the blnSearch column
 * @method array findByPrikey(int $blnPriKey) Return SysWebpagecolumn objects filtered by the blnPriKey column
 * @method array findByCreatedby(string $intCreatedBy) Return SysWebpagecolumn objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysWebpagecolumn objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysWebpagecolumn objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysWebpagecolumn objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysWebpagecolumnQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysWebpagecolumnQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysWebpagecolumn', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysWebpagecolumnQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysWebpagecolumnQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysWebpagecolumnQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysWebpagecolumnQuery) {
            return $criteria;
        }
        $query = new SysWebpagecolumnQuery();
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
     * @return   SysWebpagecolumn|SysWebpagecolumn[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysWebpagecolumnPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagecolumnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysWebpagecolumn A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `WEBPAGECOLUMN_ID`, `WEBPAGE_ID`, `INTQUERYORDER`, `STRQUERYCOLUMN`, `STRNAME`, `STRDATATYPE`, `INTORDER`, `BLNDISPLAY`, `BLNHIDDEN`, `BLNHIDE`, `BLNSEARCH`, `BLNPRIKEY`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_WebpageColumn` WHERE `WEBPAGECOLUMN_ID` = :p0';
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
            $obj = new SysWebpagecolumn();
            $obj->hydrate($row);
            SysWebpagecolumnPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysWebpagecolumn|SysWebpagecolumn[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysWebpagecolumn[]|mixed the list of results, formatted by the current formatter
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the webpagecolumn_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpagecolumnId(1234); // WHERE webpagecolumn_id = 1234
     * $query->filterByWebpagecolumnId(array(12, 34)); // WHERE webpagecolumn_id IN (12, 34)
     * $query->filterByWebpagecolumnId(array('min' => 12)); // WHERE webpagecolumn_id > 12
     * </code>
     *
     * @param     mixed $webpagecolumnId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByWebpagecolumnId($webpagecolumnId = null, $comparison = null)
    {
        if (is_array($webpagecolumnId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $webpagecolumnId, $comparison);
    }

    /**
     * Filter the query on the webpage_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpageId(1234); // WHERE webpage_id = 1234
     * $query->filterByWebpageId(array(12, 34)); // WHERE webpage_id IN (12, 34)
     * $query->filterByWebpageId(array('min' => 12)); // WHERE webpage_id > 12
     * </code>
     *
     * @see       filterBySysWebpage()
     *
     * @param     mixed $webpageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByWebpageId($webpageId = null, $comparison = null)
    {
        if (is_array($webpageId)) {
            $useMinMax = false;
            if (isset($webpageId['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGE_ID, $webpageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($webpageId['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGE_ID, $webpageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGE_ID, $webpageId, $comparison);
    }

    /**
     * Filter the query on the intQueryOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByQueryorder(1234); // WHERE intQueryOrder = 1234
     * $query->filterByQueryorder(array(12, 34)); // WHERE intQueryOrder IN (12, 34)
     * $query->filterByQueryorder(array('min' => 12)); // WHERE intQueryOrder > 12
     * </code>
     *
     * @param     mixed $queryorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByQueryorder($queryorder = null, $comparison = null)
    {
        if (is_array($queryorder)) {
            $useMinMax = false;
            if (isset($queryorder['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTQUERYORDER, $queryorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($queryorder['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTQUERYORDER, $queryorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::INTQUERYORDER, $queryorder, $comparison);
    }

    /**
     * Filter the query on the strQueryColumn column
     *
     * Example usage:
     * <code>
     * $query->filterByQuerycolumn('fooValue');   // WHERE strQueryColumn = 'fooValue'
     * $query->filterByQuerycolumn('%fooValue%'); // WHERE strQueryColumn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $querycolumn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByQuerycolumn($querycolumn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($querycolumn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $querycolumn)) {
                $querycolumn = str_replace('*', '%', $querycolumn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::STRQUERYCOLUMN, $querycolumn, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebpagecolumnPeer::STRNAME, $name, $comparison);
    }

    /**
     * Filter the query on the strDataType column
     *
     * Example usage:
     * <code>
     * $query->filterByDatatype('fooValue');   // WHERE strDataType = 'fooValue'
     * $query->filterByDatatype('%fooValue%'); // WHERE strDataType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datatype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByDatatype($datatype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datatype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datatype)) {
                $datatype = str_replace('*', '%', $datatype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::STRDATATYPE, $datatype, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::INTORDER, $order, $comparison);
    }

    /**
     * Filter the query on the blnDisplay column
     *
     * Example usage:
     * <code>
     * $query->filterByDisplay(1234); // WHERE blnDisplay = 1234
     * $query->filterByDisplay(array(12, 34)); // WHERE blnDisplay IN (12, 34)
     * $query->filterByDisplay(array('min' => 12)); // WHERE blnDisplay > 12
     * </code>
     *
     * @param     mixed $display The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByDisplay($display = null, $comparison = null)
    {
        if (is_array($display)) {
            $useMinMax = false;
            if (isset($display['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNDISPLAY, $display['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($display['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNDISPLAY, $display['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::BLNDISPLAY, $display, $comparison);
    }

    /**
     * Filter the query on the blnHidden column
     *
     * Example usage:
     * <code>
     * $query->filterByHidden(1234); // WHERE blnHidden = 1234
     * $query->filterByHidden(array(12, 34)); // WHERE blnHidden IN (12, 34)
     * $query->filterByHidden(array('min' => 12)); // WHERE blnHidden > 12
     * </code>
     *
     * @param     mixed $hidden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByHidden($hidden = null, $comparison = null)
    {
        if (is_array($hidden)) {
            $useMinMax = false;
            if (isset($hidden['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDDEN, $hidden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hidden['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDDEN, $hidden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDDEN, $hidden, $comparison);
    }

    /**
     * Filter the query on the blnHide column
     *
     * Example usage:
     * <code>
     * $query->filterByHide(1234); // WHERE blnHide = 1234
     * $query->filterByHide(array(12, 34)); // WHERE blnHide IN (12, 34)
     * $query->filterByHide(array('min' => 12)); // WHERE blnHide > 12
     * </code>
     *
     * @param     mixed $hide The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByHide($hide = null, $comparison = null)
    {
        if (is_array($hide)) {
            $useMinMax = false;
            if (isset($hide['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDE, $hide['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hide['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDE, $hide['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::BLNHIDE, $hide, $comparison);
    }

    /**
     * Filter the query on the blnSearch column
     *
     * Example usage:
     * <code>
     * $query->filterBySearch(1234); // WHERE blnSearch = 1234
     * $query->filterBySearch(array(12, 34)); // WHERE blnSearch IN (12, 34)
     * $query->filterBySearch(array('min' => 12)); // WHERE blnSearch > 12
     * </code>
     *
     * @param     mixed $search The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterBySearch($search = null, $comparison = null)
    {
        if (is_array($search)) {
            $useMinMax = false;
            if (isset($search['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNSEARCH, $search['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($search['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNSEARCH, $search['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::BLNSEARCH, $search, $comparison);
    }

    /**
     * Filter the query on the blnPriKey column
     *
     * Example usage:
     * <code>
     * $query->filterByPrikey(1234); // WHERE blnPriKey = 1234
     * $query->filterByPrikey(array(12, 34)); // WHERE blnPriKey IN (12, 34)
     * $query->filterByPrikey(array('min' => 12)); // WHERE blnPriKey > 12
     * </code>
     *
     * @param     mixed $prikey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByPrikey($prikey = null, $comparison = null)
    {
        if (is_array($prikey)) {
            $useMinMax = false;
            if (isset($prikey['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNPRIKEY, $prikey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prikey['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::BLNPRIKEY, $prikey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::BLNPRIKEY, $prikey, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysWebpagecolumnPeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagecolumnPeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Filter the query by a related SysWebpage object
     *
     * @param   SysWebpage|PropelObjectCollection $sysWebpage The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysWebpagecolumnQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysWebpage($sysWebpage, $comparison = null)
    {
        if ($sysWebpage instanceof SysWebpage) {
            return $this
                ->addUsingAlias(SysWebpagecolumnPeer::WEBPAGE_ID, $sysWebpage->getWebpageId(), $comparison);
        } elseif ($sysWebpage instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SysWebpagecolumnPeer::WEBPAGE_ID, $sysWebpage->toKeyValue('PrimaryKey', 'WebpageId'), $comparison);
        } else {
            throw new PropelException('filterBySysWebpage() only accepts arguments of type SysWebpage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysWebpage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function joinSysWebpage($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysWebpage');

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
            $this->addJoinObject($join, 'SysWebpage');
        }

        return $this;
    }

    /**
     * Use the SysWebpage relation SysWebpage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SysWebpageQuery A secondary query class using the current class as primary query
     */
    public function useSysWebpageQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysWebpage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysWebpage', 'SysWebpageQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SysWebpagecolumn $sysWebpagecolumn Object to remove from the list of results
     *
     * @return SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function prune($sysWebpagecolumn = null)
    {
        if ($sysWebpagecolumn) {
            $this->addUsingAlias(SysWebpagecolumnPeer::WEBPAGECOLUMN_ID, $sysWebpagecolumn->getWebpagecolumnId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebpagecolumnPeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebpagecolumnPeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebpagecolumnPeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebpagecolumnPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebpagecolumnPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysWebpagecolumnQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebpagecolumnPeer::DTCREATEDDATE);
    }
}
