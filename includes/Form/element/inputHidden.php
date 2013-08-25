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

class inputHidden extends input{
    //put your code here
    
    public function __construct($name,$value=null) {
        $this->type="hidden";
        $this->name=$name;
        if ($value!=NULL) {
            $this->value=$value;
        }
    }
    
}

?>
