<?php


/**
 * Base class that represents a query for the 'SEC_WebpageTracking' table.
 *
 *
 *
 * @method SecWebpagetrackingQuery orderByWebpagetrackingId($order = Criteria::ASC) Order by the webpagetracking_id column
 * @method SecWebpagetrackingQuery orderByUrl($order = Criteria::ASC) Order by the strURL column
 * @method SecWebpagetrackingQuery orderByRequestmethod($order = Criteria::ASC) Order by the strRequestMethod column
 * @method SecWebpagetrackingQuery orderByQuerystring($order = Criteria::ASC) Order by the strQueryString column
 * @method SecWebpagetrackingQuery orderByPostdata($order = Criteria::ASC) Order by the strPostData column
 * @method SecWebpagetrackingQuery orderByHttpuseragent($order = Criteria::ASC) Order by the strHttpUserAgent column
 * @method SecWebpagetrackingQuery orderByRemoteaddr($order = Criteria::ASC) Order by the strRemoteAddr column
 * @method SecWebpagetrackingQuery orderByHttpreferer($order = Criteria::ASC) Order by the strHttpReferer column
 * @method SecWebpagetrackingQuery orderBySessionid($order = Criteria::ASC) Order by the strSessionID column
 * @method SecWebpagetrackingQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SecWebpagetrackingQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 *
 * @method SecWebpagetrackingQuery groupByWebpagetrackingId() Group by the webpagetracking_id column
 * @method SecWebpagetrackingQuery groupByUrl() Group by the strURL column
 * @method SecWebpagetrackingQuery groupByRequestmethod() Group by the strRequestMethod column
 * @method SecWebpagetrackingQuery groupByQuerystring() Group by the strQueryString column
 * @method SecWebpagetrackingQuery groupByPostdata() Group by the strPostData column
 * @method SecWebpagetrackingQuery groupByHttpuseragent() Group by the strHttpUserAgent column
 * @method SecWebpagetrackingQuery groupByRemoteaddr() Group by the strRemoteAddr column
 * @method SecWebpagetrackingQuery groupByHttpreferer() Group by the strHttpReferer column
 * @method SecWebpagetrackingQuery groupBySessionid() Group by the strSessionID column
 * @method SecWebpagetrackingQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SecWebpagetrackingQuery groupByCreateddate() Group by the dtCreatedDate column
 *
 * @method SecWebpagetrackingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SecWebpagetrackingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SecWebpagetrackingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SecWebpagetracking findOne(PropelPDO $con = null) Return the first SecWebpagetracking matching the query
 * @method SecWebpagetracking findOneOrCreate(PropelPDO $con = null) Return the first SecWebpagetracking matching the query, or a new SecWebpagetracking object populated from the query conditions when no match is found
 *
 * @method SecWebpagetracking findOneByWebpagetrackingId(string $webpagetracking_id) Return the first SecWebpagetracking filtered by the webpagetracking_id column
 * @method SecWebpagetracking findOneByUrl(string $strURL) Return the first SecWebpagetracking filtered by the strURL column
 * @method SecWebpagetracking findOneByRequestmethod(string $strRequestMethod) Return the first SecWebpagetracking filtered by the strRequestMethod column
 * @method SecWebpagetracking findOneByQuerystring(string $strQueryString) Return the first SecWebpagetracking filtered by the strQueryString column
 * @method SecWebpagetracking findOneByPostdata(string $strPostData) Return the first SecWebpagetracking filtered by the strPostData column
 * @method SecWebpagetracking findOneByHttpuseragent(string $strHttpUserAgent) Return the first SecWebpagetracking filtered by the strHttpUserAgent column
 * @method SecWebpagetracking findOneByRemoteaddr(string $strRemoteAddr) Return the first SecWebpagetracking filtered by the strRemoteAddr column
 * @method SecWebpagetracking findOneByHttpreferer(string $strHttpReferer) Return the first SecWebpagetracking filtered by the strHttpReferer column
 * @method SecWebpagetracking findOneBySessionid(string $strSessionID) Return the first SecWebpagetracking filtered by the strSessionID column
 * @method SecWebpagetracking findOneByCreatedby(string $intCreatedBy) Return the first SecWebpagetracking filtered by the intCreatedBy column
 * @method SecWebpagetracking findOneByCreateddate(string $dtCreatedDate) Return the first SecWebpagetracking filtered by the dtCreatedDate column
 *
 * @method array findByWebpagetrackingId(string $webpagetracking_id) Return SecWebpagetracking objects filtered by the webpagetracking_id column
 * @method array findByUrl(string $strURL) Return SecWebpagetracking objects filtered by the strURL column
 * @method array findByRequestmethod(string $strRequestMethod) Return SecWebpagetracking objects filtered by the strRequestMethod column
 * @method array findByQuerystring(string $strQueryString) Return SecWebpagetracking objects filtered by the strQueryString column
 * @method array findByPostdata(string $strPostData) Return SecWebpagetracking objects filtered by the strPostData column
 * @method array findByHttpuseragent(string $strHttpUserAgent) Return SecWebpagetracking objects filtered by the strHttpUserAgent column
 * @method array findByRemoteaddr(string $strRemoteAddr) Return SecWebpagetracking objects filtered by the strRemoteAddr column
 * @method array findByHttpreferer(string $strHttpReferer) Return SecWebpagetracking objects filtered by the strHttpReferer column
 * @method array findBySessionid(string $strSessionID) Return SecWebpagetracking objects filtered by the strSessionID column
 * @method array findByCreatedby(string $intCreatedBy) Return SecWebpagetracking objects filtered by the intCreatedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SecWebpagetracking objects filtered by the dtCreatedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSecWebpagetrackingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSecWebpagetrackingQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SecWebpagetracking', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SecWebpagetrackingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SecWebpagetrackingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SecWebpagetrackingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SecWebpagetrackingQuery) {
            return $criteria;
        }
        $query = new SecWebpagetrackingQuery();
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
     * @return   SecWebpagetracking|SecWebpagetracking[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SecWebpagetrackingPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SecWebpagetrackingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SecWebpagetracking A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `WEBPAGETRACKING_ID`, `STRURL`, `STRREQUESTMETHOD`, `STRQUERYSTRING`, `STRPOSTDATA`, `STRHTTPUSERAGENT`, `STRREMOTEADDR`, `STRHTTPREFERER`, `STRSESSIONID`, `INTCREATEDBY`, `DTCREATEDDATE` FROM `SEC_WebpageTracking` WHERE `WEBPAGETRACKING_ID` = :p0';
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
            $obj = new SecWebpagetracking();
            $obj->hydrate($row);
            SecWebpagetrackingPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SecWebpagetracking|SecWebpagetracking[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SecWebpagetracking[]|mixed the list of results, formatted by the current formatter
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
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the webpagetracking_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpagetrackingId(1234); // WHERE webpagetracking_id = 1234
     * $query->filterByWebpagetrackingId(array(12, 34)); // WHERE webpagetracking_id IN (12, 34)
     * $query->filterByWebpagetrackingId(array('min' => 12)); // WHERE webpagetracking_id > 12
     * </code>
     *
     * @param     mixed $webpagetrackingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByWebpagetrackingId($webpagetrackingId = null, $comparison = null)
    {
        if (is_array($webpagetrackingId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $webpagetrackingId, $comparison);
    }

    /**
     * Filter the query on the strURL column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE strURL = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE strURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRURL, $url, $comparison);
    }

    /**
     * Filter the query on the strRequestMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestmethod('fooValue');   // WHERE strRequestMethod = 'fooValue'
     * $query->filterByRequestmethod('%fooValue%'); // WHERE strRequestMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requestmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByRequestmethod($requestmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requestmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requestmethod)) {
                $requestmethod = str_replace('*', '%', $requestmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRREQUESTMETHOD, $requestmethod, $comparison);
    }

    /**
     * Filter the query on the strQueryString column
     *
     * Example usage:
     * <code>
     * $query->filterByQuerystring('fooValue');   // WHERE strQueryString = 'fooValue'
     * $query->filterByQuerystring('%fooValue%'); // WHERE strQueryString LIKE '%fooValue%'
     * </code>
     *
     * @param     string $querystring The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByQuerystring($querystring = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($querystring)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $querystring)) {
                $querystring = str_replace('*', '%', $querystring);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRQUERYSTRING, $querystring, $comparison);
    }

    /**
     * Filter the query on the strPostData column
     *
     * Example usage:
     * <code>
     * $query->filterByPostdata('fooValue');   // WHERE strPostData = 'fooValue'
     * $query->filterByPostdata('%fooValue%'); // WHERE strPostData LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postdata The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByPostdata($postdata = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postdata)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postdata)) {
                $postdata = str_replace('*', '%', $postdata);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRPOSTDATA, $postdata, $comparison);
    }

    /**
     * Filter the query on the strHttpUserAgent column
     *
     * Example usage:
     * <code>
     * $query->filterByHttpuseragent('fooValue');   // WHERE strHttpUserAgent = 'fooValue'
     * $query->filterByHttpuseragent('%fooValue%'); // WHERE strHttpUserAgent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $httpuseragent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByHttpuseragent($httpuseragent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($httpuseragent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $httpuseragent)) {
                $httpuseragent = str_replace('*', '%', $httpuseragent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRHTTPUSERAGENT, $httpuseragent, $comparison);
    }

    /**
     * Filter the query on the strRemoteAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByRemoteaddr('fooValue');   // WHERE strRemoteAddr = 'fooValue'
     * $query->filterByRemoteaddr('%fooValue%'); // WHERE strRemoteAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remoteaddr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByRemoteaddr($remoteaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remoteaddr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remoteaddr)) {
                $remoteaddr = str_replace('*', '%', $remoteaddr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRREMOTEADDR, $remoteaddr, $comparison);
    }

    /**
     * Filter the query on the strHttpReferer column
     *
     * Example usage:
     * <code>
     * $query->filterByHttpreferer('fooValue');   // WHERE strHttpReferer = 'fooValue'
     * $query->filterByHttpreferer('%fooValue%'); // WHERE strHttpReferer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $httpreferer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByHttpreferer($httpreferer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($httpreferer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $httpreferer)) {
                $httpreferer = str_replace('*', '%', $httpreferer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRHTTPREFERER, $httpreferer, $comparison);
    }

    /**
     * Filter the query on the strSessionID column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionid('fooValue');   // WHERE strSessionID = 'fooValue'
     * $query->filterBySessionid('%fooValue%'); // WHERE strSessionID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sessionid)) {
                $sessionid = str_replace('*', '%', $sessionid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::STRSESSIONID, $sessionid, $comparison);
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
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SecWebpagetrackingPeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SecWebpagetrackingPeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SecWebpagetrackingPeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SecWebpagetrackingPeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SecWebpagetrackingPeer::DTCREATEDDATE, $createddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SecWebpagetracking $secWebpagetracking Object to remove from the list of results
     *
     * @return SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function prune($secWebpagetracking = null)
    {
        if ($secWebpagetracking) {
            $this->addUsingAlias(SecWebpagetrackingPeer::WEBPAGETRACKING_ID, $secWebpagetracking->getWebpagetrackingId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SecWebpagetrackingPeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SecWebpagetrackingPeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SecWebpagetrackingQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SecWebpagetrackingPeer::DTCREATEDDATE);
    }
}
