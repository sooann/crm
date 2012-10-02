<?php


/**
 * Base class that represents a query for the 'SYS_Webpage' table.
 *
 *
 *
 * @method SysWebpageQuery orderByWebpageId($order = Criteria::ASC) Order by the webpage_id column
 * @method SysWebpageQuery orderByWebtemplateId($order = Criteria::ASC) Order by the webtemplate_id column
 * @method SysWebpageQuery orderByLocation($order = Criteria::ASC) Order by the strLocation column
 * @method SysWebpageQuery orderByName($order = Criteria::ASC) Order by the strName column
 * @method SysWebpageQuery orderByDescription($order = Criteria::ASC) Order by the strDescription column
 * @method SysWebpageQuery orderByAction($order = Criteria::ASC) Order by the strAction column
 * @method SysWebpageQuery orderByRequiredparameters($order = Criteria::ASC) Order by the strRequiredParameters column
 * @method SysWebpageQuery orderByWebpagefactory($order = Criteria::ASC) Order by the strWebpageFactory column
 * @method SysWebpageQuery orderByHtml($order = Criteria::ASC) Order by the strHtml column
 * @method SysWebpageQuery orderByCommonjs($order = Criteria::ASC) Order by the strCommonJS column
 * @method SysWebpageQuery orderByClonefishparentid($order = Criteria::ASC) Order by the ClonefishparentID column
 * @method SysWebpageQuery orderByClonefishconfig($order = Criteria::ASC) Order by the strClonefishConfig column
 * @method SysWebpageQuery orderByOrmclass($order = Criteria::ASC) Order by the strORMClass column
 * @method SysWebpageQuery orderBySuccredirect($order = Criteria::ASC) Order by the strSuccRedirect column
 * @method SysWebpageQuery orderBySqlqueryId($order = Criteria::ASC) Order by the sqlquery_id column
 * @method SysWebpageQuery orderByGridoptions($order = Criteria::ASC) Order by the strGridOptions column
 * @method SysWebpageQuery orderByEditbaselinkurl($order = Criteria::ASC) Order by the strEditBaseLinkUrl column
 * @method SysWebpageQuery orderByEditactionname($order = Criteria::ASC) Order by the strEditActionName column
 * @method SysWebpageQuery orderByEditcustomfuncname($order = Criteria::ASC) Order by the strEditCustomFuncName column
 * @method SysWebpageQuery orderByEditcustomfunction($order = Criteria::ASC) Order by the strEditCustomFunction column
 * @method SysWebpageQuery orderByMassupdateenable($order = Criteria::ASC) Order by the blnMassUpdateEnable column
 * @method SysWebpageQuery orderByMultiselectcustomfunction($order = Criteria::ASC) Order by the strMultiSelectCustomFunction column
 * @method SysWebpageQuery orderByActive($order = Criteria::ASC) Order by the blnActive column
 * @method SysWebpageQuery orderByDbversionid($order = Criteria::ASC) Order by the DBVersionID column
 * @method SysWebpageQuery orderByCreatedby($order = Criteria::ASC) Order by the intCreatedBy column
 * @method SysWebpageQuery orderByModifiedby($order = Criteria::ASC) Order by the intModifiedBy column
 * @method SysWebpageQuery orderByCreateddate($order = Criteria::ASC) Order by the dtCreatedDate column
 * @method SysWebpageQuery orderByModifieddate($order = Criteria::ASC) Order by the dtModifiedDate column
 *
 * @method SysWebpageQuery groupByWebpageId() Group by the webpage_id column
 * @method SysWebpageQuery groupByWebtemplateId() Group by the webtemplate_id column
 * @method SysWebpageQuery groupByLocation() Group by the strLocation column
 * @method SysWebpageQuery groupByName() Group by the strName column
 * @method SysWebpageQuery groupByDescription() Group by the strDescription column
 * @method SysWebpageQuery groupByAction() Group by the strAction column
 * @method SysWebpageQuery groupByRequiredparameters() Group by the strRequiredParameters column
 * @method SysWebpageQuery groupByWebpagefactory() Group by the strWebpageFactory column
 * @method SysWebpageQuery groupByHtml() Group by the strHtml column
 * @method SysWebpageQuery groupByCommonjs() Group by the strCommonJS column
 * @method SysWebpageQuery groupByClonefishparentid() Group by the ClonefishparentID column
 * @method SysWebpageQuery groupByClonefishconfig() Group by the strClonefishConfig column
 * @method SysWebpageQuery groupByOrmclass() Group by the strORMClass column
 * @method SysWebpageQuery groupBySuccredirect() Group by the strSuccRedirect column
 * @method SysWebpageQuery groupBySqlqueryId() Group by the sqlquery_id column
 * @method SysWebpageQuery groupByGridoptions() Group by the strGridOptions column
 * @method SysWebpageQuery groupByEditbaselinkurl() Group by the strEditBaseLinkUrl column
 * @method SysWebpageQuery groupByEditactionname() Group by the strEditActionName column
 * @method SysWebpageQuery groupByEditcustomfuncname() Group by the strEditCustomFuncName column
 * @method SysWebpageQuery groupByEditcustomfunction() Group by the strEditCustomFunction column
 * @method SysWebpageQuery groupByMassupdateenable() Group by the blnMassUpdateEnable column
 * @method SysWebpageQuery groupByMultiselectcustomfunction() Group by the strMultiSelectCustomFunction column
 * @method SysWebpageQuery groupByActive() Group by the blnActive column
 * @method SysWebpageQuery groupByDbversionid() Group by the DBVersionID column
 * @method SysWebpageQuery groupByCreatedby() Group by the intCreatedBy column
 * @method SysWebpageQuery groupByModifiedby() Group by the intModifiedBy column
 * @method SysWebpageQuery groupByCreateddate() Group by the dtCreatedDate column
 * @method SysWebpageQuery groupByModifieddate() Group by the dtModifiedDate column
 *
 * @method SysWebpageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SysWebpageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SysWebpageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SysWebpageQuery leftJoinSysWebtemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysWebtemplate relation
 * @method SysWebpageQuery rightJoinSysWebtemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysWebtemplate relation
 * @method SysWebpageQuery innerJoinSysWebtemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the SysWebtemplate relation
 *
 * @method SysWebpageQuery leftJoinSysSqlquery($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysSqlquery relation
 * @method SysWebpageQuery rightJoinSysSqlquery($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysSqlquery relation
 * @method SysWebpageQuery innerJoinSysSqlquery($relationAlias = null) Adds a INNER JOIN clause to the query using the SysSqlquery relation
 *
 * @method SysWebpageQuery leftJoinSysWebpagecolumn($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysWebpagecolumn relation
 * @method SysWebpageQuery rightJoinSysWebpagecolumn($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysWebpagecolumn relation
 * @method SysWebpageQuery innerJoinSysWebpagecolumn($relationAlias = null) Adds a INNER JOIN clause to the query using the SysWebpagecolumn relation
 *
 * @method SysWebpage findOne(PropelPDO $con = null) Return the first SysWebpage matching the query
 * @method SysWebpage findOneOrCreate(PropelPDO $con = null) Return the first SysWebpage matching the query, or a new SysWebpage object populated from the query conditions when no match is found
 *
 * @method SysWebpage findOneByWebpageId(string $webpage_id) Return the first SysWebpage filtered by the webpage_id column
 * @method SysWebpage findOneByWebtemplateId(string $webtemplate_id) Return the first SysWebpage filtered by the webtemplate_id column
 * @method SysWebpage findOneByLocation(string $strLocation) Return the first SysWebpage filtered by the strLocation column
 * @method SysWebpage findOneByName(string $strName) Return the first SysWebpage filtered by the strName column
 * @method SysWebpage findOneByDescription(string $strDescription) Return the first SysWebpage filtered by the strDescription column
 * @method SysWebpage findOneByAction(string $strAction) Return the first SysWebpage filtered by the strAction column
 * @method SysWebpage findOneByRequiredparameters(string $strRequiredParameters) Return the first SysWebpage filtered by the strRequiredParameters column
 * @method SysWebpage findOneByWebpagefactory(string $strWebpageFactory) Return the first SysWebpage filtered by the strWebpageFactory column
 * @method SysWebpage findOneByHtml(string $strHtml) Return the first SysWebpage filtered by the strHtml column
 * @method SysWebpage findOneByCommonjs(string $strCommonJS) Return the first SysWebpage filtered by the strCommonJS column
 * @method SysWebpage findOneByClonefishparentid(string $ClonefishparentID) Return the first SysWebpage filtered by the ClonefishparentID column
 * @method SysWebpage findOneByClonefishconfig(string $strClonefishConfig) Return the first SysWebpage filtered by the strClonefishConfig column
 * @method SysWebpage findOneByOrmclass(string $strORMClass) Return the first SysWebpage filtered by the strORMClass column
 * @method SysWebpage findOneBySuccredirect(string $strSuccRedirect) Return the first SysWebpage filtered by the strSuccRedirect column
 * @method SysWebpage findOneBySqlqueryId(string $sqlquery_id) Return the first SysWebpage filtered by the sqlquery_id column
 * @method SysWebpage findOneByGridoptions(string $strGridOptions) Return the first SysWebpage filtered by the strGridOptions column
 * @method SysWebpage findOneByEditbaselinkurl(string $strEditBaseLinkUrl) Return the first SysWebpage filtered by the strEditBaseLinkUrl column
 * @method SysWebpage findOneByEditactionname(string $strEditActionName) Return the first SysWebpage filtered by the strEditActionName column
 * @method SysWebpage findOneByEditcustomfuncname(string $strEditCustomFuncName) Return the first SysWebpage filtered by the strEditCustomFuncName column
 * @method SysWebpage findOneByEditcustomfunction(string $strEditCustomFunction) Return the first SysWebpage filtered by the strEditCustomFunction column
 * @method SysWebpage findOneByMassupdateenable(int $blnMassUpdateEnable) Return the first SysWebpage filtered by the blnMassUpdateEnable column
 * @method SysWebpage findOneByMultiselectcustomfunction(string $strMultiSelectCustomFunction) Return the first SysWebpage filtered by the strMultiSelectCustomFunction column
 * @method SysWebpage findOneByActive(int $blnActive) Return the first SysWebpage filtered by the blnActive column
 * @method SysWebpage findOneByDbversionid(int $DBVersionID) Return the first SysWebpage filtered by the DBVersionID column
 * @method SysWebpage findOneByCreatedby(string $intCreatedBy) Return the first SysWebpage filtered by the intCreatedBy column
 * @method SysWebpage findOneByModifiedby(string $intModifiedBy) Return the first SysWebpage filtered by the intModifiedBy column
 * @method SysWebpage findOneByCreateddate(string $dtCreatedDate) Return the first SysWebpage filtered by the dtCreatedDate column
 * @method SysWebpage findOneByModifieddate(string $dtModifiedDate) Return the first SysWebpage filtered by the dtModifiedDate column
 *
 * @method array findByWebpageId(string $webpage_id) Return SysWebpage objects filtered by the webpage_id column
 * @method array findByWebtemplateId(string $webtemplate_id) Return SysWebpage objects filtered by the webtemplate_id column
 * @method array findByLocation(string $strLocation) Return SysWebpage objects filtered by the strLocation column
 * @method array findByName(string $strName) Return SysWebpage objects filtered by the strName column
 * @method array findByDescription(string $strDescription) Return SysWebpage objects filtered by the strDescription column
 * @method array findByAction(string $strAction) Return SysWebpage objects filtered by the strAction column
 * @method array findByRequiredparameters(string $strRequiredParameters) Return SysWebpage objects filtered by the strRequiredParameters column
 * @method array findByWebpagefactory(string $strWebpageFactory) Return SysWebpage objects filtered by the strWebpageFactory column
 * @method array findByHtml(string $strHtml) Return SysWebpage objects filtered by the strHtml column
 * @method array findByCommonjs(string $strCommonJS) Return SysWebpage objects filtered by the strCommonJS column
 * @method array findByClonefishparentid(string $ClonefishparentID) Return SysWebpage objects filtered by the ClonefishparentID column
 * @method array findByClonefishconfig(string $strClonefishConfig) Return SysWebpage objects filtered by the strClonefishConfig column
 * @method array findByOrmclass(string $strORMClass) Return SysWebpage objects filtered by the strORMClass column
 * @method array findBySuccredirect(string $strSuccRedirect) Return SysWebpage objects filtered by the strSuccRedirect column
 * @method array findBySqlqueryId(string $sqlquery_id) Return SysWebpage objects filtered by the sqlquery_id column
 * @method array findByGridoptions(string $strGridOptions) Return SysWebpage objects filtered by the strGridOptions column
 * @method array findByEditbaselinkurl(string $strEditBaseLinkUrl) Return SysWebpage objects filtered by the strEditBaseLinkUrl column
 * @method array findByEditactionname(string $strEditActionName) Return SysWebpage objects filtered by the strEditActionName column
 * @method array findByEditcustomfuncname(string $strEditCustomFuncName) Return SysWebpage objects filtered by the strEditCustomFuncName column
 * @method array findByEditcustomfunction(string $strEditCustomFunction) Return SysWebpage objects filtered by the strEditCustomFunction column
 * @method array findByMassupdateenable(int $blnMassUpdateEnable) Return SysWebpage objects filtered by the blnMassUpdateEnable column
 * @method array findByMultiselectcustomfunction(string $strMultiSelectCustomFunction) Return SysWebpage objects filtered by the strMultiSelectCustomFunction column
 * @method array findByActive(int $blnActive) Return SysWebpage objects filtered by the blnActive column
 * @method array findByDbversionid(int $DBVersionID) Return SysWebpage objects filtered by the DBVersionID column
 * @method array findByCreatedby(string $intCreatedBy) Return SysWebpage objects filtered by the intCreatedBy column
 * @method array findByModifiedby(string $intModifiedBy) Return SysWebpage objects filtered by the intModifiedBy column
 * @method array findByCreateddate(string $dtCreatedDate) Return SysWebpage objects filtered by the dtCreatedDate column
 * @method array findByModifieddate(string $dtModifiedDate) Return SysWebpage objects filtered by the dtModifiedDate column
 *
 * @package    propel.generator.CRMSGP.om
 */
abstract class BaseSysWebpageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSysWebpageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'CRMSGP', $modelName = 'SysWebpage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SysWebpageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SysWebpageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SysWebpageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SysWebpageQuery) {
            return $criteria;
        }
        $query = new SysWebpageQuery();
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
     * @return   SysWebpage|SysWebpage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SysWebpagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SysWebpagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SysWebpage A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `WEBPAGE_ID`, `WEBTEMPLATE_ID`, `STRLOCATION`, `STRNAME`, `STRDESCRIPTION`, `STRACTION`, `STRREQUIREDPARAMETERS`, `STRWEBPAGEFACTORY`, `STRHTML`, `STRCOMMONJS`, `CLONEFISHPARENTID`, `STRCLONEFISHCONFIG`, `STRORMCLASS`, `STRSUCCREDIRECT`, `SQLQUERY_ID`, `STRGRIDOPTIONS`, `STREDITBASELINKURL`, `STREDITACTIONNAME`, `STREDITCUSTOMFUNCNAME`, `STREDITCUSTOMFUNCTION`, `BLNMASSUPDATEENABLE`, `STRMULTISELECTCUSTOMFUNCTION`, `BLNACTIVE`, `DBVERSIONID`, `INTCREATEDBY`, `INTMODIFIEDBY`, `DTCREATEDDATE`, `DTMODIFIEDDATE` FROM `SYS_Webpage` WHERE `WEBPAGE_ID` = :p0';
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
            $obj = new SysWebpage();
            $obj->hydrate($row);
            SysWebpagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return SysWebpage|SysWebpage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SysWebpage[]|mixed the list of results, formatted by the current formatter
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysWebpagePeer::WEBPAGE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysWebpagePeer::WEBPAGE_ID, $keys, Criteria::IN);
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
     * @param     mixed $webpageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByWebpageId($webpageId = null, $comparison = null)
    {
        if (is_array($webpageId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SysWebpagePeer::WEBPAGE_ID, $webpageId, $comparison);
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
     * @see       filterBySysWebtemplate()
     *
     * @param     mixed $webtemplateId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByWebtemplateId($webtemplateId = null, $comparison = null)
    {
        if (is_array($webtemplateId)) {
            $useMinMax = false;
            if (isset($webtemplateId['min'])) {
                $this->addUsingAlias(SysWebpagePeer::WEBTEMPLATE_ID, $webtemplateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($webtemplateId['max'])) {
                $this->addUsingAlias(SysWebpagePeer::WEBTEMPLATE_ID, $webtemplateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::WEBTEMPLATE_ID, $webtemplateId, $comparison);
    }

    /**
     * Filter the query on the strLocation column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE strLocation = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE strLocation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRLOCATION, $location, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebpagePeer::STRNAME, $name, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebpagePeer::STRDESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the strAction column
     *
     * Example usage:
     * <code>
     * $query->filterByAction('fooValue');   // WHERE strAction = 'fooValue'
     * $query->filterByAction('%fooValue%'); // WHERE strAction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $action The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($action)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $action)) {
                $action = str_replace('*', '%', $action);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRACTION, $action, $comparison);
    }

    /**
     * Filter the query on the strRequiredParameters column
     *
     * Example usage:
     * <code>
     * $query->filterByRequiredparameters('fooValue');   // WHERE strRequiredParameters = 'fooValue'
     * $query->filterByRequiredparameters('%fooValue%'); // WHERE strRequiredParameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requiredparameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByRequiredparameters($requiredparameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requiredparameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requiredparameters)) {
                $requiredparameters = str_replace('*', '%', $requiredparameters);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRREQUIREDPARAMETERS, $requiredparameters, $comparison);
    }

    /**
     * Filter the query on the strWebpageFactory column
     *
     * Example usage:
     * <code>
     * $query->filterByWebpagefactory('fooValue');   // WHERE strWebpageFactory = 'fooValue'
     * $query->filterByWebpagefactory('%fooValue%'); // WHERE strWebpageFactory LIKE '%fooValue%'
     * </code>
     *
     * @param     string $webpagefactory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByWebpagefactory($webpagefactory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($webpagefactory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $webpagefactory)) {
                $webpagefactory = str_replace('*', '%', $webpagefactory);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRWEBPAGEFACTORY, $webpagefactory, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SysWebpagePeer::STRHTML, $html, $comparison);
    }

    /**
     * Filter the query on the strCommonJS column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonjs('fooValue');   // WHERE strCommonJS = 'fooValue'
     * $query->filterByCommonjs('%fooValue%'); // WHERE strCommonJS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonjs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByCommonjs($commonjs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonjs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonjs)) {
                $commonjs = str_replace('*', '%', $commonjs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRCOMMONJS, $commonjs, $comparison);
    }

    /**
     * Filter the query on the ClonefishparentID column
     *
     * Example usage:
     * <code>
     * $query->filterByClonefishparentid(1234); // WHERE ClonefishparentID = 1234
     * $query->filterByClonefishparentid(array(12, 34)); // WHERE ClonefishparentID IN (12, 34)
     * $query->filterByClonefishparentid(array('min' => 12)); // WHERE ClonefishparentID > 12
     * </code>
     *
     * @param     mixed $clonefishparentid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByClonefishparentid($clonefishparentid = null, $comparison = null)
    {
        if (is_array($clonefishparentid)) {
            $useMinMax = false;
            if (isset($clonefishparentid['min'])) {
                $this->addUsingAlias(SysWebpagePeer::CLONEFISHPARENTID, $clonefishparentid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clonefishparentid['max'])) {
                $this->addUsingAlias(SysWebpagePeer::CLONEFISHPARENTID, $clonefishparentid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::CLONEFISHPARENTID, $clonefishparentid, $comparison);
    }

    /**
     * Filter the query on the strClonefishConfig column
     *
     * Example usage:
     * <code>
     * $query->filterByClonefishconfig('fooValue');   // WHERE strClonefishConfig = 'fooValue'
     * $query->filterByClonefishconfig('%fooValue%'); // WHERE strClonefishConfig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clonefishconfig The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByClonefishconfig($clonefishconfig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clonefishconfig)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clonefishconfig)) {
                $clonefishconfig = str_replace('*', '%', $clonefishconfig);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRCLONEFISHCONFIG, $clonefishconfig, $comparison);
    }

    /**
     * Filter the query on the strORMClass column
     *
     * Example usage:
     * <code>
     * $query->filterByOrmclass('fooValue');   // WHERE strORMClass = 'fooValue'
     * $query->filterByOrmclass('%fooValue%'); // WHERE strORMClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ormclass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByOrmclass($ormclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ormclass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ormclass)) {
                $ormclass = str_replace('*', '%', $ormclass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRORMCLASS, $ormclass, $comparison);
    }

    /**
     * Filter the query on the strSuccRedirect column
     *
     * Example usage:
     * <code>
     * $query->filterBySuccredirect('fooValue');   // WHERE strSuccRedirect = 'fooValue'
     * $query->filterBySuccredirect('%fooValue%'); // WHERE strSuccRedirect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $succredirect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterBySuccredirect($succredirect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($succredirect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $succredirect)) {
                $succredirect = str_replace('*', '%', $succredirect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRSUCCREDIRECT, $succredirect, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterBySqlqueryId($sqlqueryId = null, $comparison = null)
    {
        if (is_array($sqlqueryId)) {
            $useMinMax = false;
            if (isset($sqlqueryId['min'])) {
                $this->addUsingAlias(SysWebpagePeer::SQLQUERY_ID, $sqlqueryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sqlqueryId['max'])) {
                $this->addUsingAlias(SysWebpagePeer::SQLQUERY_ID, $sqlqueryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::SQLQUERY_ID, $sqlqueryId, $comparison);
    }

    /**
     * Filter the query on the strGridOptions column
     *
     * Example usage:
     * <code>
     * $query->filterByGridoptions('fooValue');   // WHERE strGridOptions = 'fooValue'
     * $query->filterByGridoptions('%fooValue%'); // WHERE strGridOptions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gridoptions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByGridoptions($gridoptions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gridoptions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gridoptions)) {
                $gridoptions = str_replace('*', '%', $gridoptions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRGRIDOPTIONS, $gridoptions, $comparison);
    }

    /**
     * Filter the query on the strEditBaseLinkUrl column
     *
     * Example usage:
     * <code>
     * $query->filterByEditbaselinkurl('fooValue');   // WHERE strEditBaseLinkUrl = 'fooValue'
     * $query->filterByEditbaselinkurl('%fooValue%'); // WHERE strEditBaseLinkUrl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editbaselinkurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByEditbaselinkurl($editbaselinkurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editbaselinkurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editbaselinkurl)) {
                $editbaselinkurl = str_replace('*', '%', $editbaselinkurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STREDITBASELINKURL, $editbaselinkurl, $comparison);
    }

    /**
     * Filter the query on the strEditActionName column
     *
     * Example usage:
     * <code>
     * $query->filterByEditactionname('fooValue');   // WHERE strEditActionName = 'fooValue'
     * $query->filterByEditactionname('%fooValue%'); // WHERE strEditActionName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editactionname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByEditactionname($editactionname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editactionname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editactionname)) {
                $editactionname = str_replace('*', '%', $editactionname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STREDITACTIONNAME, $editactionname, $comparison);
    }

    /**
     * Filter the query on the strEditCustomFuncName column
     *
     * Example usage:
     * <code>
     * $query->filterByEditcustomfuncname('fooValue');   // WHERE strEditCustomFuncName = 'fooValue'
     * $query->filterByEditcustomfuncname('%fooValue%'); // WHERE strEditCustomFuncName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editcustomfuncname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByEditcustomfuncname($editcustomfuncname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editcustomfuncname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editcustomfuncname)) {
                $editcustomfuncname = str_replace('*', '%', $editcustomfuncname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STREDITCUSTOMFUNCNAME, $editcustomfuncname, $comparison);
    }

    /**
     * Filter the query on the strEditCustomFunction column
     *
     * Example usage:
     * <code>
     * $query->filterByEditcustomfunction('fooValue');   // WHERE strEditCustomFunction = 'fooValue'
     * $query->filterByEditcustomfunction('%fooValue%'); // WHERE strEditCustomFunction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editcustomfunction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByEditcustomfunction($editcustomfunction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editcustomfunction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editcustomfunction)) {
                $editcustomfunction = str_replace('*', '%', $editcustomfunction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STREDITCUSTOMFUNCTION, $editcustomfunction, $comparison);
    }

    /**
     * Filter the query on the blnMassUpdateEnable column
     *
     * Example usage:
     * <code>
     * $query->filterByMassupdateenable(1234); // WHERE blnMassUpdateEnable = 1234
     * $query->filterByMassupdateenable(array(12, 34)); // WHERE blnMassUpdateEnable IN (12, 34)
     * $query->filterByMassupdateenable(array('min' => 12)); // WHERE blnMassUpdateEnable > 12
     * </code>
     *
     * @param     mixed $massupdateenable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByMassupdateenable($massupdateenable = null, $comparison = null)
    {
        if (is_array($massupdateenable)) {
            $useMinMax = false;
            if (isset($massupdateenable['min'])) {
                $this->addUsingAlias(SysWebpagePeer::BLNMASSUPDATEENABLE, $massupdateenable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($massupdateenable['max'])) {
                $this->addUsingAlias(SysWebpagePeer::BLNMASSUPDATEENABLE, $massupdateenable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::BLNMASSUPDATEENABLE, $massupdateenable, $comparison);
    }

    /**
     * Filter the query on the strMultiSelectCustomFunction column
     *
     * Example usage:
     * <code>
     * $query->filterByMultiselectcustomfunction('fooValue');   // WHERE strMultiSelectCustomFunction = 'fooValue'
     * $query->filterByMultiselectcustomfunction('%fooValue%'); // WHERE strMultiSelectCustomFunction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $multiselectcustomfunction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByMultiselectcustomfunction($multiselectcustomfunction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($multiselectcustomfunction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $multiselectcustomfunction)) {
                $multiselectcustomfunction = str_replace('*', '%', $multiselectcustomfunction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::STRMULTISELECTCUSTOMFUNCTION, $multiselectcustomfunction, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(SysWebpagePeer::BLNACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(SysWebpagePeer::BLNACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::BLNACTIVE, $active, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByDbversionid($dbversionid = null, $comparison = null)
    {
        if (is_array($dbversionid)) {
            $useMinMax = false;
            if (isset($dbversionid['min'])) {
                $this->addUsingAlias(SysWebpagePeer::DBVERSIONID, $dbversionid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dbversionid['max'])) {
                $this->addUsingAlias(SysWebpagePeer::DBVERSIONID, $dbversionid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::DBVERSIONID, $dbversionid, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (is_array($createdby)) {
            $useMinMax = false;
            if (isset($createdby['min'])) {
                $this->addUsingAlias(SysWebpagePeer::INTCREATEDBY, $createdby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdby['max'])) {
                $this->addUsingAlias(SysWebpagePeer::INTCREATEDBY, $createdby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::INTCREATEDBY, $createdby, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByModifiedby($modifiedby = null, $comparison = null)
    {
        if (is_array($modifiedby)) {
            $useMinMax = false;
            if (isset($modifiedby['min'])) {
                $this->addUsingAlias(SysWebpagePeer::INTMODIFIEDBY, $modifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedby['max'])) {
                $this->addUsingAlias(SysWebpagePeer::INTMODIFIEDBY, $modifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::INTMODIFIEDBY, $modifiedby, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(SysWebpagePeer::DTCREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(SysWebpagePeer::DTCREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::DTCREATEDDATE, $createddate, $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function filterByModifieddate($modifieddate = null, $comparison = null)
    {
        if (is_array($modifieddate)) {
            $useMinMax = false;
            if (isset($modifieddate['min'])) {
                $this->addUsingAlias(SysWebpagePeer::DTMODIFIEDDATE, $modifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifieddate['max'])) {
                $this->addUsingAlias(SysWebpagePeer::DTMODIFIEDDATE, $modifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysWebpagePeer::DTMODIFIEDDATE, $modifieddate, $comparison);
    }

    /**
     * Filter the query by a related SysWebtemplate object
     *
     * @param   SysWebtemplate|PropelObjectCollection $sysWebtemplate The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysWebpageQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysWebtemplate($sysWebtemplate, $comparison = null)
    {
        if ($sysWebtemplate instanceof SysWebtemplate) {
            return $this
                ->addUsingAlias(SysWebpagePeer::WEBTEMPLATE_ID, $sysWebtemplate->getWebtemplateId(), $comparison);
        } elseif ($sysWebtemplate instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SysWebpagePeer::WEBTEMPLATE_ID, $sysWebtemplate->toKeyValue('PrimaryKey', 'WebtemplateId'), $comparison);
        } else {
            throw new PropelException('filterBySysWebtemplate() only accepts arguments of type SysWebtemplate or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysWebtemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function joinSysWebtemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysWebtemplate');

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
            $this->addJoinObject($join, 'SysWebtemplate');
        }

        return $this;
    }

    /**
     * Use the SysWebtemplate relation SysWebtemplate object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SysWebtemplateQuery A secondary query class using the current class as primary query
     */
    public function useSysWebtemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysWebtemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysWebtemplate', 'SysWebtemplateQuery');
    }

    /**
     * Filter the query by a related SysSqlquery object
     *
     * @param   SysSqlquery|PropelObjectCollection $sysSqlquery The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysWebpageQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysSqlquery($sysSqlquery, $comparison = null)
    {
        if ($sysSqlquery instanceof SysSqlquery) {
            return $this
                ->addUsingAlias(SysWebpagePeer::SQLQUERY_ID, $sysSqlquery->getSqlqueryId(), $comparison);
        } elseif ($sysSqlquery instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SysWebpagePeer::SQLQUERY_ID, $sysSqlquery->toKeyValue('PrimaryKey', 'SqlqueryId'), $comparison);
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
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function joinSysSqlquery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useSysSqlqueryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysSqlquery($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysSqlquery', 'SysSqlqueryQuery');
    }

    /**
     * Filter the query by a related SysWebpagecolumn object
     *
     * @param   SysWebpagecolumn|PropelObjectCollection $sysWebpagecolumn  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SysWebpageQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySysWebpagecolumn($sysWebpagecolumn, $comparison = null)
    {
        if ($sysWebpagecolumn instanceof SysWebpagecolumn) {
            return $this
                ->addUsingAlias(SysWebpagePeer::WEBPAGE_ID, $sysWebpagecolumn->getWebpageId(), $comparison);
        } elseif ($sysWebpagecolumn instanceof PropelObjectCollection) {
            return $this
                ->useSysWebpagecolumnQuery()
                ->filterByPrimaryKeys($sysWebpagecolumn->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySysWebpagecolumn() only accepts arguments of type SysWebpagecolumn or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysWebpagecolumn relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function joinSysWebpagecolumn($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysWebpagecolumn');

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
            $this->addJoinObject($join, 'SysWebpagecolumn');
        }

        return $this;
    }

    /**
     * Use the SysWebpagecolumn relation SysWebpagecolumn object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SysWebpagecolumnQuery A secondary query class using the current class as primary query
     */
    public function useSysWebpagecolumnQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysWebpagecolumn($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysWebpagecolumn', 'SysWebpagecolumnQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SysWebpage $sysWebpage Object to remove from the list of results
     *
     * @return SysWebpageQuery The current query, for fluid interface
     */
    public function prune($sysWebpage = null)
    {
        if ($sysWebpage) {
            $this->addUsingAlias(SysWebpagePeer::WEBPAGE_ID, $sysWebpage->getWebpageId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebpagePeer::DTMODIFIEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebpagePeer::DTMODIFIEDDATE);
    }

    /**
     * Order by update date asc
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebpagePeer::DTMODIFIEDDATE);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SysWebpagePeer::DTCREATEDDATE, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SysWebpagePeer::DTCREATEDDATE);
    }

    /**
     * Order by create date asc
     *
     * @return     SysWebpageQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SysWebpagePeer::DTCREATEDDATE);
    }
}
