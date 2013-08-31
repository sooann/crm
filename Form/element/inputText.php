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

class inputText extends \Form\input {
    //put your code here
    
    public function __construct($name, $title) {
        $this->type="text";
        $this->name=$name;
        $this->setDBField($name);
        $this->title = $title;
        $this->addAttribute("MAXLENGTH", "250");
        $this->addAttribute("size", "20");
    }
    
}

?>
