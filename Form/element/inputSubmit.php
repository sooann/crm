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

class inputSubmit extends \Form\input{
    //put your code here
    
    public function __construct($value) {
        $this->type="submit";
        $this->name="submit";
        $this->value=$value;
    }
    
    public function getFormDisplay() {
        return $this->getFormFieldHTML();
    }
}

?>
