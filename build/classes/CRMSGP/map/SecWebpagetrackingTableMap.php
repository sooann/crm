<?php



/**
 * This class defines the structure of the 'SEC_WebpageTracking' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.CRMSGP.map
 */
class SecWebpagetrackingTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SecWebpagetrackingTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('SEC_WebpageTracking');
        $this->setPhpName('SecWebpagetracking');
        $this->setClassname('SecWebpagetracking');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('WEBPAGETRACKING_ID', 'WebpagetrackingId', 'BIGINT', true, null, null);
        $this->addColumn('STRURL', 'Url', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRREQUESTMETHOD', 'Requestmethod', 'VARCHAR', false, 255, null);
        $this->addColumn('STRQUERYSTRING', 'Querystring', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRPOSTDATA', 'Postdata', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRHTTPUSERAGENT', 'Httpuseragent', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRREMOTEADDR', 'Remoteaddr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRHTTPREFERER', 'Httpreferer', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRSESSIONID', 'Sessionid', 'LONGVARCHAR', false, null, null);
        $this->addColumn('INTCREATEDBY', 'Createdby', 'BIGINT', false, null, null);
        $this->addColumn('DTCREATEDDATE', 'Createddate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => array('create_column' => 'dtCreatedDate', 'update_column' => 'updated_at', 'create_by' => 'intCreatedBy', 'update_by' => 'updated_by', 'disable_updated_at' => 'true', ),
            'sqlaudit' => array('table' => 'sec_sqlaudit', 'class' => 'SecSqlaudit', ),
            'dbversion' => array('version_column' => 'DBVersionID', ),
            'insertactive' => array('active_column' => 'blnActive', ),
        );
    } // getBehaviors()

} // SecWebpagetrackingTableMap
