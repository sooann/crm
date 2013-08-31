<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of FSMViewEdit
 *
 * @author user
 */

class ViewEdit implements \Form\IFormStateMachine {
    //put your code here
    protected $action = array("VIEW","EDIT");
    
    public function nextstate($action, $method, $submit) {
        if ($submit=="" && strtolower($action)=="view") {
            return array("action"=>"edit","method"=>"POST");
        } else {
            if ($method="GET") {
                $method="POST";
            }
            return array("action"=>strtolower($action),"method"=>$method);
        }
    }
    
    public function getAction() {
        return $this->action;
    }
}

?>
