<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of inputtext
 *
 * @author user
 */

class separator extends \Form\FormElement {
    
    public function __construct($name,$value) {
        $this->value = $value;
        $this->name = $name;
    }
    
    protected function setFieldValue($value,$action) {
        return $value;
    }
    
    protected function getFieldValue($value,$action) {
        return $value;
    } 
            
    public function getFormField() {
        return $this->value;
    }
    
    public function getFormDisplay() {
        return $this->value;
    }
}


?>
