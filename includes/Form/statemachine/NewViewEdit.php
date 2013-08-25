<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FSMNewViewEdit
 *
 * @author user
 */

require dirname(__FILE__)."/ViewEdit.php";
        
class NewViewEdit extends ViewEdit {
    //put your code here
    protected $action = array("VIEW","EDIT","NEW");
    
}

?>
