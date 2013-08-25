<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormElement
 *
 * @author user
 */

abstract class FormElement {
    
    private $action;
    private $dbfield;
    private $dbtable;
    private $defaultvalue;
    private $viewonly=false;
    private $displayonly=array();
    private $validation = array();
    private $validateerror;
    private $validatemessage = "";
    
    protected $name;
    protected $title;
    protected $value;
    protected $attribute=array();
    
    abstract public function getFormField();
    abstract public function getFormDisplay();
    abstract protected function setFieldValue($value,$action);
    abstract protected function getFieldValue($value,$action);
    
    public function getTitle($showmandatory=true) {
        $html="";
        if ($showmandatory) {
            if (count($this->validation)>0) {
                foreach ($this->validation as $validation) {
                    if (get_class($validation)=="MandatoryValidation") {
                        $html='<span class="mandatory">*</span>&nbsp;';
                    }
                }
            }
        }
        $html .= $this->title;
        return $html;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getFormFieldHTML(){
        if ($this->displayonly) {
            $html = $this->getFormDisplay().
                new inputHidden($this->name);
        } else {
            $html = $this->getFormField();
            if (isset($this->validateerror)) {
                if (!$this->validateerror) {
                    $html .= "&nbsp;!error";
                }
            }
        }
        return $html;
    }
    
    public function getFormDisplayHTML(){
        return $this->getFormDisplay();
    }
    
    public function getValue() {
        $value = $this->getFieldValue($this->value, $this->action);
        return $value;
    }
    
    public function setValue($value) {
        $value = $this->setFieldValue($value, $this->action);
        $this->value = $value;
    }
    
    public function getAction() {
        return $this->action;
    }
    
    public function setAction($value) {
        $this->action = $value;
    }
    
    public function addAttribute($key, $value) {
        $this->attribute[$key] = $value;
    }
    
    public function setDBField ($field, $table=null) {
        $this->dbtable = $table;
        $this->dbfield = $field;
    }
    
    public function getDBField() {
        return $this->dbfield;
    }
    
    public function getDBTable() {
        return $this->dbtable;
    }
    
    public function setDefaultValue($value) {
        $this->defaultvalue = $value;
    }
    
    public function getDefaultValue() {
        return $this->defaultvalue;
    }
    
    public function enableViewOnly() {
        $this->viewonly=true;
    }
    
    public function disableViewOnly() {
        $this->viewonly=false;
    }
    
    public function getViewOnly() {
        return $this->viewonly;
    }
    
    public function displayOnly($value) {
        if (is_array($value)) {
            if (count($value)>0) {
                $this->displayonly = array_merge($value,$this->displayonly);
            }
        } else {
            $this->displayonly[] = $value; 
        }
    }
    
    public function checkDisplay($action) {
        foreach ($this->displayonly as $value) {
            if (strtolower($value)==strtolower($action)) {
                return false;
            }
        }
        return true;
    }
    
    public function addValidation(IFormValidation $validataion) {
        $this->validation[] = $validataion;
    }
    
    public function validate() {
        $haserror=true;
        if (count($this->validation)>0) {
            foreach ($this->validation as $validation) {
                if (!$validation->validate($this->value)) {
                    $haserror=false;
                }
            }
        }
        $this->validateerror=$haserror;
        return $haserror;
    }
}

?>
