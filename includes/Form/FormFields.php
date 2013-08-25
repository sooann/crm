<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormFields
 *
 * @author user
 */

class FormFields {
    
    //const
    const TABLECONTENT="table";
    const DIVCONTENT="div";
    const FORMMODE = "form";
    const DETAILMODE = "detail";
    
    private $formfield;
    private $formbutton;
    private $action;
    private $type;
    private $variables;
    
    public function __construct(&$formfield,&$formbutton,$action,$formsubmit,$type=self::TABLECONTENT) {
        $this->formfield=&$formfield;
        $this->formbutton=&$formbutton;
        $this->action = $action;
        $this->type = $type;
        
        //die if no fields configured.
        if (count($this->formfield)==0) {
            die("no fields configured");
        }
        
    }
    
    public static function loadFormElements() {
        //Load Form Elements
        $array = glob(__dir__."/element/*.php");
        foreach ($array as $value) {
            require_once $value;
        }
        
        //Load Form Validation
        $array = glob(__dir__."/validation/*.php");
        foreach ($array as $value) {
            require_once $value;
        }
    }
    
    public function buildForm(){
        $html = "";
        if ($this->type==self::TABLECONTENT) {
            $html = '<table id="frmcontent_'.$this->action.'" >';
        } else {
            $html = '<div id="frmcontent_'.$this->action.'" >';
        }
        $html .='<input type="hidden" name="formsubmitted" value="submitted" />';
        foreach ($this->formfield as $field) {
            if ($field->checkDisplay($this->action)) {
                $name = $field->getName();
                if (get_class($field)!="separator") {
                    if (isset($this->variables[$name])) {
                        $field->setValue($this->variables[$name]);
                    } else {
                        $field->setValue(NULL);
                    }
                }
                $field->setAction($this->action);
                if (!$field->getViewOnly()) {
                    $formhtml = $field->getFormFieldHTML();
                } else {
                    $formhtml = $field->getFormDisplay();
                }
                $title = $field->getTitle();
                if (get_class($field)!="separator") {
                    if ($this->type==self::TABLECONTENT) {
                        $html .= '<tr id="row_'.$name.'" >
                            <td id="label_'.$name.'" >'.$title.':</td>
                            <td id="data_'.$name.'" >'.$formhtml.'</td></tr>';
                    } else {
                        $html .= '<div id="row_'.$name.'" >
                            <div id="label_'.$name.'" >'.$title.':</div>
                            <div id="data_'.$name.'" >'.$formhtml.'</div></div>';
                    }
                } else {
                    if ($this->type==self::TABLECONTENT) {
                        $html .= '<tr id="row_'.$name.'" >
                            <td id="data_'.$name.'" colspan="2" >'.$formhtml.'</td></tr>';
                    } else {
                        $html .= '<div id="row_'.$name.'" >
                            <div id="data_'.$name.'" >'.$formhtml.'</div></div>';
                    }
                }
            }    
        }
        $html .= $this->buildFooterButton();
        if ($this->type==self::TABLECONTENT) {
            $html .= '</table>';
        } else {
            $html = '</div>';
        }
        return $html;
    }
    
    public function buildView(){
        $html = "";
        if ($this->type==self::TABLECONTENT) {
            $html = '<table id="frmcontent_'.$this->action.'" >';
        } else {
            $html = '<div id="frmcontent_'.$this->action.'" >';
        }
        foreach ($this->formfield as $field) {
            if ($field->checkDisplay($this->action)) {
                $name = $field->getName();
                if (get_class($field)!="separator") {
                    if (isset($this->variables[$name])) {
                        $field->setValue($this->variables[$name]);
                    } else {
                        $field->setValue(NULL);
                    }
                }
                $field->setAction($this->action);
                $formhtml = $field->getFormDisplay();
                $title = $field->getTitle();
                if (get_class($field)!="separator") {
                    if ($this->type==self::TABLECONTENT) {
                        $html .= '<tr id="row_'.$name.'" >
                            <td id="label_'.$name.'" >'.$title.':</td>
                            <td id="data_'.$name.'" >'.$formhtml.'</td></tr>';
                    } else {
                        $html .= '<div id="row_'.$name.'" >
                            <div id="label_'.$name.'" >'.$title.':</div>
                            <div id="data_'.$name.'" >'.$formhtml.'</div></div>';
                    }
                } else {
                    if ($this->type==self::TABLECONTENT) {
                        $html .= '<tr id="row_'.$name.'" >
                            <td id="data_'.$name.'" colspan="2" >'.$formhtml.'</td></tr>';
                    } else {
                        $html .= '<div id="row_'.$name.'" >
                            <div id="data_'.$name.'" >'.$formhtml.'</div></div>';
                    }
                }
            }
        }
        $html .= $this->buildFooterButton();
        if ($this->type==self::TABLECONTENT) {
            $html .= '</table>';
        } else {
            $html = '</div>';
        }
        return $html;
    }
    
    private function buildFooterButton() {
        $html = '<tr id="frmfooter_'.$this->action.'"><td></td><td>';
        if (count($this->formbutton)>0) {
            foreach ($this->formbutton as $button) {
                $html .= $button->getFormFieldHTML()."&nbsp;";
            }
        }
        $html .= "</td></tr>";
        return $html; 
    }
    
    public function getFormValue() {
        $out = array();
        foreach ($this->formfield as $field){
            $field->setAction($this->action);
            $out[$field->getName()] = $field->getValue();
        }
        return $out;
    }
    
    public function loadDBVariables(&$formvariables) {
        foreach ($this->formfield as $field) {   
            if (count($formvariables)>0 && $field->getDBField()!="") {
                if (!is_null($field->getDBTable())) {
                    $dbtable = $field->getDBTable();
                    $dbfield = $field->getDBField();
                } else if (!is_null($field->getDBField())) {
                    $dbtable = array_keys($formvariables)[0];
                    $dbfield = $field->getDBField();
                } else {
                    $dbtable = array_keys($formvariables)[0];
                    $dbfield = $field->getName();
                }
                $this->variables[$field->getName()] = $formvariables[$dbtable][$dbfield];
            } else {
                //get default value
                $this->variables[$field->getName()]=$field->getDefaultValue();
            }
        }
    }
    
    public function loadPostVariables(&$formvariables) {
        foreach ($this->formfield as $field) {
            //copy variables
            if (array_key_exists($field->getName(), $formvariables)) {
                if(is_array($formvariables[$field->getName()])) {
                    $this->variables[$field->getName()] = $formvariables[$field->getName()];
                } else {
                    $this->variables[$field->getName()] = trim($formvariables[$field->getName()]);
                }
            }
        }
    }
    
    public function validateForm() {
        if (count($this->variables)==0) {
            die ("No Variables Loaded");
        }
        
        $haveerror=false;
        foreach ($this->formfield as $field) {
            if (get_class($field)!="separator") {
                $name = $field->getName();
                if (!isset($this->variables[$name])){
                    $field->setValue(NULL);
                } else {
                    $field->setValue($this->variables[$name]);
                }
                if (!$field->validate()) {
                    $haveerror=true;
                }
            }
        }
        
        return $haveerror;
    }
}


?>
