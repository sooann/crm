<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of inputText
 *
 * @author user
 */

class inputBackButton extends \Form\inputButton {
    //put your code here
    
    public function __construct($value=NULL) {
        $this->type="button";
        $this->name="back";
        if ($value==NULL) {
            $this->value="Back";
        } else {
            $this->value=$value;
        }
        $this->addAttribute("onClick","window.history.back();");
    }
    
    public function getFormDisplay() {
        return $this->getFormFieldHTML();
    }
}

?>
