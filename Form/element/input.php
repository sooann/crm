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

class input extends \Form\FormElement {
    
    protected $type;

    public function __construct($type,$name,$title) {
        $this->name = $name;
        $this->title = $title;
        $this->type = $type;
        $this->setDBField($name);
    }
    
    protected function setFieldValue($value,$action) {
        return $value;
    }
    
    protected function getFieldValue($value,$action) {
        return $value;
    } 
            
    public function getFormField() {
        $html = "<input ";
        $html .= 'type="'.$this->type.'" ';
        $html .= 'name="'.$this->name.'" ';
        $html .= 'id="'.$this->name.'" ';
        foreach ($this->attribute as $key=>$value) {
            $html .= $key.' = "'.$value.'" ';
        }
        $html .= 'value="'.$this->value.'" ';
        $html .= '/>';
        return $html;
    }
    
    public function getFormDisplay() {
        return $this->value;
    }
}


?>
