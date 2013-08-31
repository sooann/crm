<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Form;
/**
 * Description of inputtext
 *
 * @author user
 */

class sqlEditor extends htmlEditor {
    
    protected function getFieldValue($value,$action) {
        return html_entity_decode($value);
    } 
    
}


?>
