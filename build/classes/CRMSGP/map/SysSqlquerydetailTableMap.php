<?php



/**
 * This class defines the structure of the 'SYS_SQLQueryDetail' table.
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
class SysSqlquerydetailTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SysSqlquerydetailTableMap';

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
        $this->setName('SYS_SQLQueryDetail');
        $this->setPhpName('SysSqlquerydetail');
        $this->setClassname('SysSqlquerydetail');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('SQLQUERYDETAIL_ID', 'SqlquerydetailId', 'BIGINT', true, null, null);
        $this->addForeignKey('SQLQUERY_ID', 'SqlqueryId', 'BIGINT', 'SYS_SQLQuery', 'SQLQUERY_ID', true, null, null);
        $this->addColumn('STRPARAMETER', 'Parameter', 'VARCHAR', false, 255, null);
        $this->addColumn('STRNAME', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('INTTYPE', 'Type', 'INTEGER', false, null, null);
        $this->addColumn('STRTYPENAME', 'Typename', 'VARCHAR', false, 255, null);
        $this->addColumn('INTCREATEDBY', 'Createdby', 'BIGINT', false, null, null);
        $this->addColumn('DTCREATEDDATE', 'Createddate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SysSqlquery', 'SysSqlquery', RelationMap::MANY_TO_ONE, array('sqlquery_id' => 'sqlquery_id', ), null, null);
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

} // SysSqlquerydetailTableMap
