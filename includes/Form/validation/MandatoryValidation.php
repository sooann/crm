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
    
    public function validate($value) {
        if ($value=="") {
            return false;
        } 
        
        return true;
    }
}

?>
