<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of FormValidataion
 *
 * @author user
 */
Interface IFormValidation {
    //put your code here
    
    public function validate($value);
    public function getErrorMessage();
}

?>
