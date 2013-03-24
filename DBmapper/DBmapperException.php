<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DBmapper;

class DBmapperException extends \Exception {
    
    public static function tableNotFound () {
        return new self ("Table not Specified.");
    }
}

?>
