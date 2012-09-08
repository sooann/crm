<?php



/**
 * This class defines the structure of the 'SYS_Webtemplate' table.
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
class SysWebtemplateTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SysWebtemplateTableMap';

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
        $this->setName('SYS_Webtemplate');
        $this->setPhpName('SysWebtemplate');
        $this->setClassname('SysWebtemplate');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('WEBTEMPLATE_ID', 'WebtemplateId', 'BIGINT', true, null, null);
        $this->addColumn('STRNAME', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('STRDESCRIPTION', 'Description', 'VARCHAR', false, 255, null);
        $this->addColumn('STRDOCTYPE', 'Doctype', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRHEAD', 'Head', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRHEADER', 'Header', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRFOOTER', 'Footer', 'LONGVARCHAR', false, null, null);
        $this->addColumn('BLNACTIVE', 'Active', 'INTEGER', false, null, null);
        $this->addColumn('INTCREATEDBY', 'Createdby', 'BIGINT', false, null, null);
        $this->addColumn('INTMODIFIEDBY', 'Modifiedby', 'BIGINT', false, null, null);
        $this->addColumn('DTCREATEDDATE', 'Createddate', 'TIMESTAMP', false, null, null);
        $this->addColumn('DTMODIFIEDDATE', 'Modifieddate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SysWebpage', 'SysWebpage', RelationMap::ONE_TO_MANY, array('webtemplate_id' => 'webtemplate_id', ), null, null, 'SysWebpages');
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
            'timestampable' => array('create_column' => 'dtCreatedDate', 'update_column' => 'dtModifiedDate', 'create_by' => 'intCreatedBy', 'update_by' => 'intModifiedBy', 'disable_updated_at' => 'false', ),
            'sqlaudit' => array('table' => 'sec_sqlaudit', 'class' => 'SecSqlaudit', ),
            'dbversion' => array('version_column' => 'DBVersionID', ),
            'insertactive' => array('active_column' => 'blnActive', ),
        );
    } // getBehaviors()

} // SysWebtemplateTableMap
