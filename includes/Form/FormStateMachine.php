<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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
            require dirname(__FILE__).'/statemachine/'.$type.'.php';
            $this->type=$type;
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

interface IFormStateMachine {
    public function nextstate ($action,$method,$submit);
    public function getAction();
}

?>
