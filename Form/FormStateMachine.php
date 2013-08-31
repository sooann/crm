<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of FormStateMachine
 *
 * @author user
 */

class FormStateMachine {
    //put your code here
    private $type = "";
    private $statemachine;
    
    public function __construct($type) {
        //check if type valid
        if ($type!="") {
            $this->type=$type;
            $type="Form\\".$type;
            $this->statemachine = new $type();
            if (!($this->statemachine instanceof IFormStateMachine)) {
                die ("Invalid Form State Machine");
            }
        }
    }
    
    public function nextstate($action,$method,$submit) {
        return $this->statemachine->nextstate($action,$method,$submit);
    }
    
    public function getAction() {
        return $this->statemachine->getAction();
    }
}

?>
