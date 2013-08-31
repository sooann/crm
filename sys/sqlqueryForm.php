<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace sys;

use Form\Form;
use Form\FormLoadTable;
use Form\inputText;
use Form\sqlEditor;
use Form\MandatoryValidation;

/**
 * Description of sqlqueryForm
 *
 * @author user
 */
class sqlqueryForm extends Form {
    //put your code here
    
    protected function initForm() {

        $this->addTable(new FormLoadTable("sys_sqlquery"));

        $field = new inputText("name","Name");
        $field->addValidation(new \Form\MandatoryValidation());
        $this->addFields($field);

        $field = new sqlEditor("sqlstatement","SQL");
        $field->addValidation(new \Form\MandatoryValidation());
        $this->addFields($field);

    }
}

?>
