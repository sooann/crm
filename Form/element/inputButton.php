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

class inputButton extends \Form\input {
    //put your code here
    
    public function __construct($name,$value) {
        $this->type="button";
        $this->name="btn".$name;
        $this->value=$value;
    }
    
    public function getFormDisplay() {
        return $this->getFormFieldHTML();
    }
}

?>
