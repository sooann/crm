<?php

namespace sys;

use Form\Form;
use Form\FormLoadTable;
use Form\separator;
use Form\inputText;
use Form\select;
use Form\htmlEditor;
use Form\addToList;
use Form\MandatoryValidation;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
class pagelistForm extends Form {

    protected function initForm() {

        global $conn;

        $this->addTable(new FormLoadTable("sys_pagelist"));
        $this->addTable(new FormLoadTable("sys_pagelistaction","pagelist_id"));

        $field = new inputText("displayterm","Display Term");
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);

        $field = new inputText("displaytermpural","Display Term(s)");
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);

        $field = new inputText("url","URL");
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);

        $option=array();
        $temp = glob(__DIR__."/../includes/Form/statemachine/*.php");
        foreach ($temp as $value) {
            $option[basename($value,".php")] = basename($value,".php");
        }
        $field = new select("statemachine", "Form State Machine", $option);
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);

        $option=array();
        $option["FORM"] = "FORM";
        $option["LIST"] = "LIST";
        $field = new select("type", "Page Type", $option);
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);

        $field = new htmlEditor("description", "Description");
        $this->addFields($field);

        $field = new separator("separator1", "Page Action Details");
        $this->addFields($field);

        $option=array();
        $sql = "select * from sys_pageaction where active=1";
        $result = mysql_query($sql,$conn);
        while ($row=mysql_fetch_array($result)) {
            $option[$row["pageaction_id"]] = $row["name"]." (".ucfirst(strtolower($row["formmode"])).")";
        }
        $field = new addToList("pageaction_id","Select Page Actions",$option, addToList::VERTICALLAYOUT);
        $field->setDBField("pageaction_id", "sys_pagelistaction");
        $field->addValidation(new MandatoryValidation());
        $this->addFields($field);
    }

}
    
?>
