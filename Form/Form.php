<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of Form
 *
 * @author user
 */

/** @abstract  */
abstract class Form {
    //put your code here
    
    /** @var string  */
    private $DisplayTerm;
    
    /** @var string  */
    private $DisplayTermPural;
    
    /** @var string  */
    private $url;
    
    /** @var string  */
    private $pagetitle="";
    
    /** @var string  */
    private $description="";
    
    /** @var int  */
    private $id;
    
    /** @var string[]  */
    private $action = array();
    
    /** @var string  */
    private $currentaction = "";
    
    /** @var string  */
    private $currentmethod = "";
    
    /** @var string  */
    private $formsubmit = "";
    
    /** @var boolean  */
    private $formvalidateerror=false;
    
    /** @var array  */
    private $localvariable = array();
    
    /** @var Slim  */
    private $routerapp;
    
    /** @var string  */
    private $formmode;
    
    /** @var FormElement[]  */
    private $formbutton;
    
    /** @var SQLWrapper  */
    private $table;
    
    /** @var SQLWrapper[]  */
    private $tables;
    
    /** @var FormElement[]  */
    private $fields;
    
    /** @var FormFields  */
    private $formfields;
    
    /** @var string[action][]  */
    private $javascript;
    
    /** @var FormStateMachine  */
    protected $statemachine;
    
    /** @var int  */
    protected $formid;
    
    abstract protected function initForm();
    
    public function __construct(\Slim\Slim $app, $pagelistid=NULL) {
        $param = $app->router()->getCurrentRoute()->getParams();
        $this->routerapp=$app;
        
        if (isset($param["action"])) {
            $this->currentaction = strtoupper($param["action"]);
        } else {
            $this->currentaction = "NEW";
        }
        
        if (isset($param["id"])) {
            $this->id = $param["id"];
        } 
        
        if (is_null($pagelistid)) {
            $this->routerapp->notFound();
        } else {
            $this->formid = $pagelistid;
        }
        
        $this->currentmethod = $_SERVER["REQUEST_METHOD"];
        
        $this->init();
    }
    
    private function init() {
        
        //get display names from database        
        $this->getFormParameters();
        
        //add detail header row
        $this->addFields(new separator("pageseparator",$this->DisplayTerm." Details"));
        
        //call local class init
        $this->initForm();
        
        //find for table 
        $this->loadTable();
        
        //init statemachine
        if (is_string($this->statemachine)) {
            $this->statemachine = new FormStateMachine($this->statemachine);
        }
        $this->action = $this->statemachine->getAction();
        
        //get actions for form
        if (count($this->action)==0) {
            die("No actions defined");
        }
        
        //match http form action
        if (array_search(strtoupper($this->currentaction), $this->action)===false) {
            die("unable to find action for form");
        }
        
        //call on action init
        if (method_exists($this, "onInit".ucfirst($this->currentaction)."Form")) {
            call_user_func(array($this,"onInit".$this->currentmethod."Form"));
        }
                
        //check form submit
        if ($this->currentmethod=="POST") {
            if (isset($_POST["formsubmitted"])) {
                $this->formsubmit=$_POST["submit"];
            }
        }
        
        //set page titles
        $this->loadTitles();
        
        //load default form buttons
        if (!isset($this->formbutton) || count($this->formbutton)==0) {
            if (strtolower($this->currentaction)=="edit" || strtolower($this->currentaction)=="new") {
                //for form add Save 
                $this->addFormButton(new inputSubmit("Save"));
            } else if (strtolower($this->currentaction)=="view") {
                //for view add Update
                $this->addFormButton(new inputSubmit("Update"));
            } else {
                $this->addFormButton(new inputSubmit(ucfirst(strtolower($this->currentaction))));
            } 
            
            $this->addFormButton(new inputBackButton());
            
        }
        
        //loading formfield module
        $this->formfields = new FormFields($this->fields,$this->formbutton,$this->currentaction,$this->formsubmit);
        
    }
    
    private function getFormParameters() {
        
        global $conn;
        
        if (!is_nan($this->formid)) {
            $sql = "select sys_pagelist.*, sys_pageaction.formmode from sys_pagelist left join sys_pagelistaction on sys_pagelist.pagelist_id = sys_pagelistaction.pagelist_id left join sys_pageaction on sys_pagelistaction.pageaction_id = sys_pageaction.pageaction_id where sys_pagelist.pagelist_id = $this->formid and sys_pageaction.name like '%$this->currentaction%'";
            $result = mysql_query($sql, $conn);
            if (mysql_num_rows($result)>0) {
                $row = mysql_fetch_array($result);
                $this->DisplayTerm = $row["displayterm"];
                $this->DisplayTermPural = $row["displaytermpural"];
                $this->url = $row["url"];
                $this->statemachine = $row["statemachine"];
                $this->description = $row["description"];
                $this->formmode = $row["formmode"];
            } else {
                die ("Form ID $this->formid is not found.");
            }
        } else {
            die("Empty Form ID.");
        }
    }
    
    public function run() {
        $this->loadFormVariables();
        $this->processForm();
    }
    
    private function loadTitles() {
        //load page titles
        if ($this->pagetitle=="") {
            //$this->pagetitle=ucfirst($this->currentaction)." ".$this->DisplayTerm;
             switch ($this->currentaction) {
                case "NEW":
                    $this->pagetitle = "Create New ".$this->DisplayTerm.".";
                    break;
                case "EDIT":
                    $this->pagetitle = "Edit ".$this->DisplayTerm.".";
                    break;
                case "View":
                    $this->pagetitle = "View ".$this->DisplayTerms.".";
                    break;
             }
        }
        
        //load page description
        if ($this->description=="") {
            switch ($this->currentaction) {
                case "NEW":
                    $this->description = "To create a new ".$this->DisplayTerm.", please fill up the mandatory fields below and click the Save Button to continue.";
                    break;
                case "EDIT":
                    $this->description = "To modifiy $this->DisplayTerm data, please fill up the mandatory fiels below and click the Save Button";
                    break;
                case "VIEW":
                    $this->description = "Display details of the $this->DisplayTerm data. To update this data please click in the \"Update\" button below";
                    break;
            }
        }
    }
    
    public function setPageTitle($title) {
        $this->pagetitle = $title;
    }
    
    private function loadFormVariables() {
        if ($this->currentmethod=="POST" && $this->formsubmit!="") {
            //load variables from $_POST;     
            if (method_exists($this, "onLoadPostVars")) {
                $this->localvariable = array_merge(call_user_func(array($this,"onLoadPostVars"), $this->localvariable),$this->localvariable);
            }
            $this->formfields->loadPostVariables($_POST);
        } else {
            //load variables from database
            if (isset($this->id)) {
                if (method_exists($this, "onLoadDBVars")) {
                    $this->localvariable = array_merge(call_user_func(array($this,"onLoadDBVars"), $this->localvariable),$this->localvariable);
                }
                $this->formfields->loadDBVariables($this->localvariable);
            }
        }
    }
    
    private function processForm() {
        if ($this->formsubmit!="") {
            //validate form
            $this->formvalidateerror = $this->formfields->validateForm();
            if (method_exists($this, "onValidateForm")) {
                $this->formvalidateerror = call_user_func(array($this,"onValidateForm"),$this->localvariable);
            }
        }
        if ($this->formvalidateerror || $this->formsubmit=="") {
            $this->generateForm();
        } else {
            $this->submitdata();
        }
    }
    
    private function generateForm() {
        //get next state
        $nextstate = $this->statemachine->nextstate($this->currentaction,$this->currentmethod,$this->formsubmit);
        
        //load JS libraries
        $headerlibs=\JSLIBS::getJSHeader();
        
        $url = getBasePath()."/".$this->url.'/'.$nextstate["action"];
        if ($this->id!=NULL) {
            $url .= "/".$this->id; 
        }
        
        //set form html
        $html = '<form action="'.$url.'" method="'.$nextstate["method"].'" >';
        
        //call formfields builder
        if ($this->formmode==FormFields::FORMMODE) {
            $html .= $this->formfields->buildForm();
        } else {
            $html .= $this->formfields->buildView();
        }
        
        //call onGenerate{Action}Form()
        if (method_exists($this, "onGenerate".ucfirst(strtolower($this->currentaction))."Form")) {
            $html .= call_user_func(array($this,"onGenerate".ucfirst(strtolower($this->currentaction))."Form"), $this->localvariable);
        }
        
        //close HTML Form tag
        $html .= "</form>";
        
        $js="";
        //insert javascript
        if (isset($this->javascript["all"])) {
            foreach ($this->javascript["all"] as $jscode) {
                $js.=$jscode;
            }
        }
        if (isset($this->javascript[strtolower($this->currentaction)])) {
            foreach ($this->javascript[strtolower($this->currentaction)] as $jscode) {
                $js.=$jscode;
            }
        }
        if ($js!="") {
            $html.='<script type="text/javascript">'.$js.'</script>';
        }
        
        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head>'.$headerlibs.'</head><body>'.$html.'</body></html>';
    }
    
    private function submitdata() {
        //get data from formfields
        if (method_exists($this, "onSaveForm")) {
            $html .= call_user_func(array($this,"onSaveForm"), $this->formfields->getFormValue());
        } else {
            //find main table fields and update or insert into database
            $othertable = array();
            foreach ($this->fields as $field) {
                if ($field->getDBField()!="") {
                    if ($field->getDBTable()=="") {
                        $this->table->addparam($field->getDBField(), $field->getValue());
                    } else {
                        if (array_search($field->getDBTable(), $othertable)===false) {
                            $othertable[]=$field->getDBTable();
                        }
                    }
                }
            }
            if (isset($this->id)) {
                //edit record
                $this->table->update($this->id);
            } else {
                //add record
                $this->id = $this->table->insert();
            }
            
            //check if fields have data belonging to another table
            foreach ($othertable as $table) {
                //find table object
                $tableobj = null;
                foreach ($this->tables as $obj) {
                    if ($obj->getTable()==$table) {
                        $tableobj = &$obj;
                    }
                }
                
                //delete existing records in other table
                if ($tableobj->isReferenced()) {
                    $tableobj->delete($tableobj->getRefColumn()." = ".$this->id);
                }
                
                //convert array
                $otherfields = array();
                $countarraylength=0;
                //count elements array length get fields related to tables 
                foreach ($this->fields as $field) {
                    if ($field->getDBTable()==$table) {
                       $otherfields[] = $field;
                       if (count($field->getValue())>$countarraylength) {
                           $countarraylength=count($field->getValue());
                       }
                    }
                }
                
                //save into table
                for ($i=0;$i<$countarraylength;$i++) {
                    $tableobj->addparam($this->table->getPrimaryKey(), $this->id);
                    foreach ($otherfields as $field) {
                        $tableobj->addparam($field->getDBField(), $field->getValue()[$i]);
                    }
                    $tableobj->insert();
                }
            }
        }
    }
    
    public function addTable (FormLoadTable $table) {
        $this->tables[] = $table;
    }
    
    private function loadTable() {
        if (count($this->tables)!=0) {
            for ($i=0;$i<count($this->tables);$i++) {
                $temp = $this->tables[$i];
                $temp->setFormVariables($this->localvariable);
                $this->tables[$i] = $temp->getTable();
                if (isset($this->id)) {
                    $this->localvariable[$temp->getTableName()] = $temp->getData($this->id);
                }
            }
            $this->table = $this->tables[0];
        } else {
            die ("no tables to load.");
        }
    }
    
    public function addFields (FormElement $element) {
        $this->fields[] = $element;
    }
    
    public function addFormButton (FormElement $element) {
        //check if class is inputsubmit or button class
        if (get_class($element)=="Form\inputSubmit" || get_class($element)=="Form\inputButton" || is_subclass_of($element,"Form\inputSubmit") ||  is_subclass_of($element,"Form\inputButton")) {
            $this->formbutton[] = $element;
        }
    }
    
    public function addJavaScript ($value,$action=NUll) {
        if ($action==NULL) {
            $this->javascript["all"][] = $value;
        } else {
            if (is_array($action)) {
                foreach ($action as $act) {
                    $this->javascript[$act][] = $value;
                }
            } else {
                $this->javascript[$action][] = $value;
            }
        }
    }
}

?>
