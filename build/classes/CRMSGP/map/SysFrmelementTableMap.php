<?php



/**
 * This class defines the structure of the 'SYS_FrmElement' table.
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
class SysFrmelementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CRMSGP.map.SysFrmelementTableMap';

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
        $this->setName('SYS_FrmElement');
        $this->setPhpName('SysFrmelement');
        $this->setClassname('SysFrmelement');
        $this->setPackage('CRMSGP');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('FRMELEMENT_ID', 'FrmelementId', 'BIGINT', true, null, null);
        $this->addColumn('STRNAME', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('STRCLASSNAME', 'Classname', 'VARCHAR', false, 255, null);
        $this->addColumn('STREXTENDS', 'Extends', 'VARCHAR', false, 255, null);
        $this->addColumn('STRINCLUDES', 'Includes', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRVARIABLES', 'Variables', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRCONSTRUCTOR', 'Constructor', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRCONSTRUCTORARGS', 'Constructorargs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRGETHTML', 'Gethtml', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRGETHTMLROW', 'Gethtmlrow', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRGETVALUE', 'Getvalue', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRSETVALUE', 'Setvalue', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STRGETSCRIPTS', 'Getscripts', 'LONGVARCHAR', false, null, null);
        $this->addColumn('STROTHERCODE', 'Othercode', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DBVERSIONID', 'Dbversionid', 'BIGINT', false, null, null);
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

} // SysFrmelementTableMap
