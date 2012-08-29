<?php



/**
 * This class defines the structure of the 'SEC_SQLAudit' table.
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
class SecSqlauditTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SecSqlauditTableMap';

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
        $this->setName('SEC_SQLAudit');
        $this->setPhpName('SecSqlaudit');
        $this->setClassname('SecSqlaudit');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('SQLAUDIT_ID', 'SqlauditId', 'BIGINT', true, null, null);
        $this->addColumn('STRSQLSTATEMENT', 'Sqlstatement', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRPARAMETERS', 'Parameters', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRPAGEURL', 'Pageurl', 'LONGVARCHAR', false, null, null);
        $this->addColumn('INTRECORDID', 'Recordid', 'BIGINT', false, null, null);
        $this->addColumn('INTVERSIONID', 'Versionid', 'BIGINT', false, null, null);
        $this->addColumn('DTSTARTDATE', 'Startdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('DTENDDATE', 'Enddate', 'TIMESTAMP', false, null, null);
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

} // SecSqlauditTableMap
