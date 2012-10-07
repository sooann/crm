<?php



/**
 * This class defines the structure of the 'SYS_WebpageColumn' table.
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
class SysWebpagecolumnTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SysWebpagecolumnTableMap';

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
        $this->setName('SYS_WebpageColumn');
        $this->setPhpName('SysWebpagecolumn');
        $this->setClassname('SysWebpagecolumn');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('WEBPAGECOLUMN_ID', 'WebpagecolumnId', 'BIGINT', true, null, null);
        $this->addForeignKey('WEBPAGE_ID', 'WebpageId', 'BIGINT', 'SYS_Webpage', 'WEBPAGE_ID', false, null, null);
        $this->addColumn('INTQUERYORDER', 'Queryorder', 'INTEGER', false, null, null);
        $this->addColumn('STRQUERYCOLUMN', 'Querycolumn', 'VARCHAR', false, 255, null);
        $this->addColumn('STRNAME', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('STRDATATYPE', 'Datatype', 'VARCHAR', false, 255, null);
        $this->addColumn('INTORDER', 'Order', 'INTEGER', false, null, null);
        $this->addColumn('BLNDISPLAY', 'Display', 'CHAR', false, null, null);
        $this->addColumn('BLNHIDDEN', 'Hidden', 'CHAR', false, null, null);
        $this->addColumn('BLNHIDE', 'Hide', 'CHAR', false, null, null);
        $this->addColumn('BLNSEARCH', 'Search', 'CHAR', false, null, null);
        $this->addColumn('BLNPRIKEY', 'Prikey', 'CHAR', false, null, null);
        $this->addColumn('STRFORMATTER', 'Formatter', 'VARCHAR', false, 255, null);
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
        $this->addRelation('SysWebpage', 'SysWebpage', RelationMap::MANY_TO_ONE, array('webpage_id' => 'webpage_id', ), null, null);
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

} // SysWebpagecolumnTableMap
