<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputtext
 *
 * @author user
 */

require_once __dir__.'/../FormElement.php';

class separator extends FormElement {
    
    protected $type;

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
