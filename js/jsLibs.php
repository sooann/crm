<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JSMap
 *
 * @author user
 */

define("JS-SELECTBOX",'<script src="'.getBasePath().'/js/selectbox.js"></script>');
define("JS-TINYMCE",'<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>');
define("JS-JQUERY",'<script src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>');

class JSLIBS {
    
    private static $libs = array();
    
    public static function getJSHeader() {
        $html="";
        foreach (self::$libs as $key=>$value) {
            $html .= $value;
        }
        return $html;
    }
    
    public static function setJSLib($value) {
        if (defined($value)) {
            if (!array_key_exists($value, self::$libs)){
                self::$libs[$value]=  constant($value);
            }
        }
    }
}

?>
