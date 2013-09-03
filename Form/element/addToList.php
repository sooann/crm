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

class addToList extends \Form\FormElement {
    
    const HORIZONTALLAYOUT = "HORIZONTAL";
    const VERTICALLAYOUT = "VERTICAL";
    
    private $option;
    private $layout;
    private $size=10;
    
    public function __construct($name,$title,$option,$layout=self::VERTICALLAYOUT) {
        $this->name = $name;
        $this->title = $title;
        $this->setDBField($name);
        $this->option = $option;
        $this->layout = $layout;
        \JSLIBS::setJSLib("JS-SELECTBOX");
        \JSLIBS::setJSLib("JS-JQUERY");
    }
    
    protected function setFieldValue($value,$action) {
        return $value;
    }
    
    protected function getFieldValue($value,$action) {
        return $value;
    } 
            
    public function getFormField() {
        $srcoption="";
        $destoption="";
        
        foreach ($this->option as $key=>$value) {
            $varfound = false;
            if (!is_null($this->value)) {  
                if (is_array(($this->value))) {
                    if (array_search($key,$this->value)!==false){ 
                        $varfound=true;
                    }
                } else {
                    if ($key==$this->value) {
                        $varfound=true;
                    }
                }
            }
            if (!$varfound) {
                $srcoption .= "<option value=\"$key\" >$value</option>";
            } else {
                $destoption .= "<option value=\"$key\" >$value</option>";
            }
        }
       
        $source = "<select id=\"src-$this->name\" name=\"src-$this->name\" size=\"$this->size\" multiple>$srcoption</select>";
        
        $dest = '<select id="'.$this->name.'" name="'.$this->name.'[]" size="'.$this->size.'" multiple>'.$destoption.'</select>';
        
        $doallcmd="moveAllOptions";
        $docmd="moveSelectedOptions";
        
        if ($this->layout==self::HORIZONTALLAYOUT) {
            $buttons = "<button type=\"button\" onClick=\"$doallcmd($('#src-$this->name')[0],$('#$this->name')[0]);\" >Add All</button>&nbsp;";
            $buttons .= "<button type=\"button\" onClick=\"$docmd($('#src-$this->name')[0],$('#$this->name')[0]);\">Add</button>&nbsp;";
            $buttons .= "<button type=\"button\" onClick=\"$docmd($('#$this->name')[0],$('#src-$this->name')[0]);\">Remove</button>&nbsp;";
            $buttons .= "<button type=\"button\" onClick=\"$doallcmd($('#$this->name')[0],$('#src-$this->name')[0]);\">Reomve All</button>";
            $html = '<table cellpadding="5" cellspacing="0" border="0"><tr><td align="center">'.$source.'</td></tr><tr><td align="center">'.$buttons.'</td></tr><tr><td align="center">'.$dest.'</td></tr></table>';
        } else {
            $buttons = "<button style='width:50px' type=\"button\" onClick=\"$doallcmd($('#src-$this->name')[0],$('#$this->name')[0]);\" >&gt;&gt;</button><br />";
            $buttons .= "<button style='width:50px' type=\"button\" onClick=\"$docmd($('#src-$this->name')[0],$('#$this->name')[0]);\" >&gt;</button><br />";
            $buttons .= "<button style='width:50px' type=\"button\" onClick=\"$docmd($('#$this->name')[0],$('#src-$this->name')[0]);\" >&lt;</button><br />";
            $buttons .= "<button style='width:50px' type=\"button\" onClick=\"$doallcmd($('#$this->name')[0],$('#src-$this->name')[0]);\" >&lt;&lt;</button>";
            $html = '<table cellpadding="5" cellspacing="0" border="0"><tr><td align="center">'.$source.'</td><td align="center" valign="middle" >'.$buttons.'</td><td align="center">'.$dest.'</td></tr></table>';
        }
            $html .='<script type="text/javascript">$("form").submit(function (){$("#'.$this->name.' OPTION").prop("selected", "selected")});</script>';
        return $html;
    }
    
    public function getFormDisplay() {
        return $this->option[$this->value];
    }
    
    public function setSize($value) {
        $this->size = $value;
    }
}


?>
