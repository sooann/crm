<?php


/**
 * Base class that represents a query for the 'SYS_Webtemplate' table.
 *
 *
 *
 * @method SysWebtemplateQuery orderByWebtemplateId($order = Criteria::ASC) Order by the webtemplate_id column
 * @method SysWebtemplateQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysWebtemplateQuery orderByDescription($order = Criteria::ASC) Order by the strDescription column
 * @method SysWebtemplateQuery orderByDoctype($order = Criteria::ASC) Order by the strDocType column
 * @method SysWebtemplateQuery orderByHead($order = Criteria::ASC) Order by the strHead column
 * @method SysWebtemplateQuery orderByHeader($order = Criteria::ASC) Order by the strHeader column
 * @method SysWebtemplateQuery orderByFooter($order = Criteria::ASC) Order by the strFooter column
 * @method SysWebtemplateQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysWebtemplateQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysWebtemplateQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysWebtemplateQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysWebtemplateQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysWebtemplateQuery groupByWebtemplateId() Group by the webtemplate_id column
 * @method SysWebtemplateQuery groupByName() Group by the strName column
 * @method SysWebtemplateQuery groupByDescription() Group by the strDescription column
 * @method SysWebtemplateQuery groupByDoctype() Group by the strDocType column
 * @method SysWebtemplateQuery groupByHead() Group by the strHead column
 * @method SysWebtemplateQuery groupByHeader() Group by the strHeader column
 * @method SysWebtemplateQuery groupByFooter() Group by the strFooter column
 * @method SysWebtemplateQuery groupByActive() Group by the blnActive column
 * @method SysWebtemplateQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysWebtemplateQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysWebtemplateQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysWebtemplateQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysWebtemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysWebtemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysWebtemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysWebtemplateQuery leftJoinSysWebpage($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysWebpage relation
 * @method SysWebtemplateQuery rightJoinSysWebpage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysWebpage relation
 * @method SysWebtemplateQuery innerJoinSysWebpage($relationAlias = null) Adds a INNER JOIN clause to the query using the SysWebpage relation
 *
 * @method SysWebtemplate findOne(PropelPDO $con = null) Return the first SysWebtemplate matching the query
 * @method SysWebtemplate findOneOrCreate(PropelPDO $con = null) Return the first SysWebtemplate matching the query, or a new SysWebtemplate object populated from the query conditions when no match is found
 *
 * @method SysWebtemplate findOneByWebtemplateId(string $webtemplate_id) Return the first SysWebtemplate filtered by the webtemplate_id column
 * @method SysWebtemplate findOneByName(string $strName) Return the first SysWebtemplate filtered by the strName column
 * @method SysWebtemplate findOneByDescription(string $strDescription) Return the first SysWebtemplate filtered by the strDescription column
 * @method SysWebtemplate findOneByDoctype(string $strDocType) Return the first SysWebtemplate filtered by the strDocType column
 * @method SysWebtemplate findOneByHead(string $strHead) Return the first SysWebtemplate filtered by the strHead column
 * @method SysWebtemplate findOneByHeader(string $strHeader) Return the first SysWebtemplate filtered by the strHeader column
 * @method SysWebtemplate findOneByFooter(string $strFooter) Return the first SysWebtemplate filtered by the strFooter column
 * @method SysWebtemplate findOneByActive(int $blnActive) Return the first SysWebtemplate filtered by the blnActive column
 * @method SysWebtemplate findOneByCreatedby(string $intCreatedBy) Return the first SysWebtemplate filtered by the intCreatedBy column
 * @method SysWebtemplate findOneByModifiedby(string $intModifiedBy) Return the first SysWebtemplate filtered by the intModifiedBy column
 * @method SysWebtemplate findOneByCreateddate(string $dtCreatedDate) Return the first SysWebtemplate filtered by the dtCreatedDate column
 * @method SysWebtemplate findOneByModifieddate(string $dtModifiedDate) Return the first SysWebtemplate filtered by the dtModifiedDate column
 *
 * @method array findByWebtemplateId(string $webtemplate_id) Return SysWebtemplate objects filtered by the webtemplate_id column
 * @method array findByName(string $strName) Return SysWebtemplate objects filtered by the strName column
 * @method array findByDescription(string $strDescription) Return SysWebtemplate objects filtered by the strDescription column
 * @method array findByDoctype(string $strDocType) Return SysWebtemplate objects filtered by the strDocType column
 * @method array findByHead(string $strHead) Return SysWebtemplate objects filtered by the strHead column
 * @method array findByHeader(string $strHeader) Return SysWebtemplate objects filtered by the strHeader column
 * @method array findByFooter(string $strFooter) Return SysWebtemplate objects filtered by the strFooter column
 * @method array findByActive(int $blnActive) Return SysWebtemplate objects filtered by the blnActive column
 * @method array findByCreatedby(string $intCreatedBy) Return SysWebtemplate objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysWebtemplate objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysWebtemplate objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysWebtemplate objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysWebtemplateQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysWebtemplateQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysWebtemplate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysWebtemplateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysWebtemplateQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysWebtemplateQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysWebtemplateQuery) {
            return $criteria;
        }
        $query = new SysWebtemplateQuery();
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
     * @return   SysWebtemplate|SysWebtemplate[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysWebtemplatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysWebtemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysWebtemplate A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `WEBTEMPLATE_ID`, `STRNAME`, `STRDESCRIPTION`, `STRDOCTYPE`, `STRHEAD`, `STRHEADER`, `STRFOOTER`, `BLNACTIVE`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_Webtemplate` WHERE `WEBTEMPLATE_ID` = :p0';
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
            $obj = new SysWebtemplate();
            $obj->hydrate($row);
            SysWebtemplatePeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysWebtemplate|SysWebtemplate[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysWebtemplate[]|mixed the list of results, formatted by the current formatter
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysWebtemplatePeer::WEBTEMPLATE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysWebtemplatePeer::WEBTEMPLATE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the webtemplate_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebtemplateId(1234); // WHERE webtemplate_id = 1234
     * $query->filterByWebtemplateId(array(12, 34)); // WHERE webtemplate_id IN (12, 34)
     * $query->filterByWebtemplateId(array('min' => 12)); // WHERE webtemplate_id > 12
     * </code>
     *
     * @param     mixed $webtemplateId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByWebtemplateId($webtemplateId = null, $comparison = null)
    {
        if (is_array($webtemplateId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysWebtemplatePeer::WEBTEMPLATE_ID, $webtemplateId, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebtemplatePeer::STRNAME, $name, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebtemplatePeer::STRDESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the strDocType column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctype('fooValue');   // WHERE strDocType = 'fooValue'
     * $query->filterByDoctype('%fooValue%'); // WHERE strDocType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByDoctype($doctype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $doctype)) {
                $doctype = str_replace('*', '%', $doctype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::STRDOCTYPE, $doctype, $comparison);
    }

    /**
     * Filter the query on the strHead column
     *
     * Example usage:
     * <code>
     * $query->filterByHead('fooValue');   // WHERE strHead = 'fooValue'
     * $query->filterByHead('%fooValue%'); // WHERE strHead LIKE '%fooValue%'
     * </code>
     *
     * @param     string $head The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByHead($head = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($head)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $head)) {
                $head = str_replace('*', '%', $head);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::STRHEAD, $head, $comparison);
    }

    /**
     * Filter the query on the strHeader column
     *
     * Example usage:
     * <code>
     * $query->filterByHeader('fooValue');   // WHERE strHeader = 'fooValue'
     * $query->filterByHeader('%fooValue%'); // WHERE strHeader LIKE '%fooValue%'
     * </code>
     *
     * @param     string $header The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByHeader($header = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($header)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $header)) {
                $header = str_replace('*', '%', $header);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::STRHEADER, $header, $comparison);
    }

    /**
     * Filter the query on the strFooter column
     *
     * Example usage:
     * <code>
     * $query->filterByFooter('fooValue');   // WHERE strFooter = 'fooValue'
     * $query->filterByFooter('%fooValue%'); // WHERE strFooter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $footer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByFooter($footer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($footer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $footer)) {
                $footer = str_replace('*', '%', $footer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::STRFOOTER, $footer, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysWebtemplatePeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysWebtemplatePeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::BLNACTIVE, $active, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysWebtemplatePeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysWebtemplatePeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysWebtemplatePeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysWebtemplatePeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysWebtemplatePeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysWebtemplatePeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysWebtemplatePeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysWebtemplatePeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebtemplatePeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Filter the query by a related SysWebpage object
     *
     * @param   SysWebpage|PropelObjectCollection $sysWebpage  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysWebtemplateQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysWebpage($sysWebpage, $comparison = null)
    {
        if ($sysWebpage instanceof SysWebpage) {
            return $this
                ->addUsingAlias(SysWebtemplatePeer::WEBTEMPLATE_ID, $sysWebpage->getWebtemplateId(), $comparison);
        } elseif ($sysWebpage instanceof PropelObjectCollection) {
            return $this
                ->useSysWebpageQuery()
                ->filterByPrimaryKeys($sysWebpage->getPrimaryKeys())
                ->endUse();
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
     * @return SysWebtemplateQuery The current query, for fluid interface
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
     * @param   SysWebtemplate $sysWebtemplate Object to remove from the list of results
     *
     * @return SysWebtemplateQuery The current query, for fluid interface
     */
    public function prune($sysWebtemplate = null)
    {
        if ($sysWebtemplate) {
            $this->addUsingAlias(SysWebtemplatePeer::WEBTEMPLATE_ID, $sysWebtemplate->getWebtemplateId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebtemplatePeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebtemplatePeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebtemplatePeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebtemplatePeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebtemplatePeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysWebtemplateQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebtemplatePeer::DTCREATEDDATE);
    }
}
