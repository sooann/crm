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

class select extends \Form\FormElement {
    
    private $option;
    private $emptyoptiontext;

    public function __construct($name,$title,$option,$emptyoptiontext=NULL) {
        $this->name = $name;
        $this->title = $title;
        $this->setDBField($name);
        $this->option = $option;
        $this->emptyoptiontext = $emptyoptiontext;
    }
    
    protected function setFieldValue($value,$action) {
        return $value;
    }
    
    protected function getFieldValue($value,$action) {
        return $value;
    } 
            
    public function getFormField() {
        $html = "<select ";
        $html .= 'name="'.$this->name.'" ';
        $html .= 'id="'.$this->name.'" ';
        foreach ($this->attribute as $key=>$value) {
            $html .= $key.' = "'.$value.'" ';
        }
        $html .= '>';
        if ($this->emptyoptiontext==NULL) {
            $html .= "<option value=''>Please select an option</option>";
        } else if ($this->emptyoptiontext!="") {
            $html .= "<option value=''>$this->emptyoptiontext</option>";
        }
        foreach ($this->option as $key=>$value) {
            $html .= "<option value='$key' ";
            if ($this->value==$key) {
                $html .= "selected";
            }
            $html .= ">$value</option>";
        }
        $html .= '</select>';
        return $html;
    }
    
    public function getFormDisplay() {
        return $this->option[$this->value];
    }
}


?>
