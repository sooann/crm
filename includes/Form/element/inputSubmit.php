<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputText
 *
 * @author user
 */

require_once 'input.php';

class inputSubmit extends input{
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
