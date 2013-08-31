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

class inputHidden extends \Form\input {
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
