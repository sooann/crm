<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;
/**
 * Description of IFormStateMachine
 *
 * @author user
 */

interface IFormStateMachine {
    public function nextstate ($action,$method,$submit);
    public function getAction();
}

?>
