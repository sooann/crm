<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inputtext
 *
 * @author user
 */

require_once __dir__.'/../FormElement.php';

class htmlEditor extends FormElement {
    
    private $height;
    private $width;
    private $plugin;
    private $toolbar;
    private $menubar;
    private $showmenubar;
    private $showtoolbar;
    private $showstatusbar;

    public function __construct($name,$title,$height=100,$width=400) {
        $this->name = $name;
        $this->title = $title;
        $this->setDBField($name);
        $this->width=$width;
        $this->height=$height;
        JSLIBS::setJSLib("JS-TINYMCE");
    }
    
    protected function setFieldValue($value,$action) {
        return $value;
    }
    
    protected function getFieldValue($value,$action) {
        return $value;
    } 
    
    public function setPlugin($value) {
        $this->plugin = $value;
    }
    
    public function setToolbar($value) {
        $this->toolbar = $value;
    }
    
    private function getDefaultSetting() {
        if (!isset($this->plugin)) {
            $this->plugin = '"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker","searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking","save table contextmenu directionality emoticons template paste textcolor"';
        }
        if (!isset($this->toolbar)) {
            $this->toolbar = "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons";
        }
        if (!isset($this->showmenubar)) {
            $this->showmenubar=false;
        } 
        if (!isset($this->showstatusbar)) {
            $this->showstatusbar=false;
        }
        if (!isset($this->showtoolbar)) {
            $this->showtoolbar=false;
        }
    }
            
    public function getFormField() {
        $html="";
        $this->getDefaultSetting();
        
        $html .= "<textarea ";
        $html .= 'name="'.$this->name.'" ';
        $html .= 'id="'.$this->name.'" ';
        $html .= 'class="mceeditor" >';
        $html .= $this->value;
        $html .= "</textarea>";
        $html .= '<script type="text/javascript">';
        $html .= 'tinymce.init({';
        $html .= 'selector: "#'.$this->name.'.mceeditor",';
        $html .= 'width: '.$this->width.',';
        $html .= 'height: '.$this->height.',';
        $html .= 'forced_root_block: false,';
        $html .= 'plugins: ['.$this->plugin.'],';
        if ($this->showtoolbar) {
            $html .= 'toolbar: "'.$this->toolbar.'",';
        } else {
            $html .= 'toolbar: false,';
        }
        if (!$this->showmenubar) {
            $html .= 'menubar: false,';
        } 
        if (!$this->showstatusbar) {
            $html .= 'statusbar: false,';
        }
        $html .= '});';
        $html .= '</script>';

        return $html;
    }
    
    public function getFormDisplay() {
        return $this->value;
    }
}


?>
