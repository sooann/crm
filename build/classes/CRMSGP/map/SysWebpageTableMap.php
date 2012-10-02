<?php



/**
 * This class defines the structure of the 'SYS_Webpage' table.
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
class SysWebpageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SysWebpageTableMap';

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
        $this->setName('SYS_Webpage');
        $this->setPhpName('SysWebpage');
        $this->setClassname('SysWebpage');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('WEBPAGE_ID', 'WebpageId', 'BIGINT', true, null, null);
        $this->addForeignKey('WEBTEMPLATE_ID', 'WebtemplateId', 'BIGINT', 'SYS_Webtemplate', 'WEBTEMPLATE_ID', false, null, null);
        $this->addColumn('STRLOCATION', 'Location', 'VARCHAR', false, 255, null);
        $this->addColumn('STRNAME', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('STRDESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRACTION', 'Action', 'VARCHAR', false, 255, null);
        $this->addColumn('STRREQUIREDPARAMETERS', 'Requiredparameters', 'VARCHAR', false, 255, null);
        $this->addColumn('STRWEBPAGEFACTORY', 'Webpagefactory', 'VARCHAR', false, 255, null);
        $this->addColumn('STRHTML', 'Html', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRCOMMONJS', 'Commonjs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CLONEFISHPARENTID', 'Clonefishparentid', 'BIGINT', false, null, null);
        $this->addColumn('STRCLONEFISHCONFIG', 'Clonefishconfig', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRORMCLASS', 'Ormclass', 'VARCHAR', false, 255, null);
        $this->addColumn('STRSUCCREDIRECT', 'Succredirect', 'VARCHAR', false, 255, null);
        $this->addForeignKey('SQLQUERY_ID', 'SqlqueryId', 'BIGINT', 'SYS_SQLQuery', 'SQLQUERY_ID', false, null, null);
        $this->addColumn('STRGRIDOPTIONS', 'Gridoptions', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STREDITBASELINKURL', 'Editbaselinkurl', 'VARCHAR', false, 255, null);
        $this->addColumn('STREDITACTIONNAME', 'Editactionname', 'VARCHAR', false, 255, null);
        $this->addColumn('STREDITCUSTOMFUNCNAME', 'Editcustomfuncname', 'VARCHAR', false, 255, null);
        $this->addColumn('STREDITCUSTOMFUNCTION', 'Editcustomfunction', 'LONGVARCHAR', false, null, null);
        $this->addColumn('BLNMASSUPDATEENABLE', 'Massupdateenable', 'INTEGER', false, null, null);
        $this->addColumn('STRMULTISELECTCUSTOMFUNCTION', 'Multiselectcustomfunction', 'LONGVARCHAR', false, null, null);
        $this->addColumn('BLNACTIVE', 'Active', 'INTEGER', false, null, null);
        $this->addColumn('DBVERSIONID', 'Dbversionid', 'INTEGER', false, null, null);
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
        $this->addRelation('SysWebtemplate', 'SysWebtemplate', RelationMap::MANY_TO_ONE, array('webtemplate_id' => 'webtemplate_id', ), null, null);
        $this->addRelation('SysSqlquery', 'SysSqlquery', RelationMap::MANY_TO_ONE, array('sqlquery_id' => 'sqlquery_id', ), null, null);
        $this->addRelation('SysWebpagecolumn', 'SysWebpagecolumn', RelationMap::ONE_TO_MANY, array('webpage_id' => 'webpage_id', ), null, null, 'SysWebpagecolumns');
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

} // SysWebpageTableMap
