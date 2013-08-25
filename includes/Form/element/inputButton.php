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

class inputButton extends input {
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
