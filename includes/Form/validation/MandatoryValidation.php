<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MandatoryValidation
 *
 * @author user
 */

require_once __dir__.'/../FormValidation.php';

class MandatoryValidation implements IFormValidation {
    //put your code here
    private $errormessage = "Please enter a value.";
    
    public function __construct($errormessage=NULL) {
        if ($errormessage!=NULL) {
            $this->errormessage=$errormessage;
        }
    }


    public function validate($value) {
        if ($value=="") {
            return false;
        }         
        return true;
    }
    
    public function getErrorMessage() {
        return $this->errormessage;
    }
}

?>
