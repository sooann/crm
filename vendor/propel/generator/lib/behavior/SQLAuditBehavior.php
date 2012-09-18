<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

/**
 * Gives a model class the ability to track creation and last modification dates
 * Uses two additional columns storing the creation and update date
 *
 * @author     François Zaninotto
 * @version    $Revision$
 * @package    propel.generator.behavior
 */
class SQLAuditBehavior extends Behavior
{
    // default parameters value
    protected $parameters = array(
        'table'      => 'sec_sqlaudit',
        'class'      => 'SecSqlaudit'
    );

    public function postSave($builder)
    {
    	$script = "
if (class_exists('".$this->getParameter('class')."', true)==true) {
	if (get_class(\$this)!='".$this->getParameter('class')."') {
		\$SqlAudit = new ".$this->getParameter('class')."();
		\$SqlAudit->setSqlstatement(\$con->getLastExecutedQuery());
		\$SqlAudit->setPageurl(\$_SERVER['REQUEST_URI']);
		\$SqlAudit->setRecordid(\$this->getPrimaryKey());
		if (method_exists(\$this, 'getDefaultDBVersionid')) {
			\$SqlAudit->setVersionid(\$this->getDefaultDBVersionid());
		}
		\$SqlAudit->setStartdate(\$con->getStartTimeLastExecutedQuery());
		\$SqlAudit->setEnddate(\$con->getEndTimeLastExecutedQuery());
		\$SqlAudit->save();
	}
}
		";
		return $script;
	}
}
