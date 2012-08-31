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
class InsertActiveBehavior extends Behavior
{
    // default parameters value
    protected $parameters = array(
        'active_column'      => 'blnActive'
    );

    /**
     * Get the setter of one of the columns of the behavior
     *
     * @param  string $column One of the behavior colums, 'create_column' or 'update_column'
     * @return string The related setter, 'setCreatedOn' or 'setUpdatedOn'
     */
    protected function getColumnSetter($column)
    {
        return 'set' . $this->getColumnForParameter($column)->getPhpName();
    }
	
    protected function getColumnGetter($column)
    {
        return 'get' . $this->getColumnForParameter($column)->getPhpName();
    }

    protected function getColumnConstant($columnName, $builder)
    {
        return $builder->getColumnConstant($this->getColumnForParameter($columnName));
    }

    /**
     * Add code in ObjectBuilder::preInsert
     *
     * @return string The code to put at the hook
     */
    public function preInsert($builder)
    {
		if ($this->getTable()->containsColumn($this->getParameter('active_column'))) {
            return "\$this->" . $this->getColumnSetter('active_column') . "(1);";
		}
    }
}
