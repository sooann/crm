<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    class pageactionForm extends Form {
        
        protected function initForm() {
            
            global $conn;
            
            $this->addTable(new FormLoadTable("sys_pageaction"));
            
            $field = new inputText("name","Action Name");
            $field->addValidation(new MandatoryValidation());
            $this->addFields($field);
            
            $option=array();
            $option["form"] = "Form";
            $option["detail"] = "Detail";
            $field = new select("formmode", "Form Mode", $option);
            $this->addFields($field);
            
        }
    
    }
    
?>
