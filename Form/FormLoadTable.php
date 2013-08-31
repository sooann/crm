<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form;

/**
 * Description of FormLoadTable
 *
 * @author user
 */
class FormLoadTable {
    //put your code here
    private $table;    
    private $refcolumn;
    private $id;
    private $srccolumn;
    private $srctable;
    private $formvariables;
    
    public function __construct($table,$refcolumn=NULL,$srctable=NULL,$srccolumn=NULL) {
        $this->table = new \SQLWrapper($table);
        $this->refcolumn = $refcolumn;
        if ($refcolumn!=NULL) {
            $this->table->setRefColumn($refcolumn);
        }
        $this->srccolumn = $srccolumn;
        $this->srctable = $srctable;
    }
    
    public function setId($value) {
        $this->id=$value;
    }
    
    public function setFormVariables(&$value) {
        $this->formvariables = &$value;
    }
    
    public function getTable() {
        return $this->table;
    }
    
    public function getTableName() {
        return $this->table->getTable();
    }
    
    public function getData($id=NULL) {
        global $conn;
        
        if (!is_null($this->srccolumn) && !is_null($this->srctable)) {
            $id = $this->formvariables[$this->srctable][$this->srccolumn];
        } elseif (is_null($id)) {
            $id = $this->id;
        }
        
        if (is_null($this->refcolumn)) {
            $column = $this->table->getPrimaryKey();
        } else {
            $column = $this->refcolumn;
        }
        
        $sql = "select * from ".$this->table->getTable()." where $column = $id";
        $result = mysql_query($sql,$conn);
        if (mysql_num_rows($result)>1) {
            //multiple row output
            $out = array();
            while ($row = mysql_fetch_assoc($result)){
                foreach ($row as $key=>$value) {
                    $out[$key][]=$value;
                }
            }
            return $out;
        } elseif (mysql_num_rows($result)>0 || $this->refcolumn!=NULL) {
            //single row output
            if (mysql_num_rows($result)==0) {
                $columndata = $this->table->getColumns();
                foreach ($columndata as $column) {
                    $row[$column[0]]=NULL;
                }
            } else {
                $row = mysql_fetch_array($result,MYSQL_ASSOC);
            }
            
            //load system fields - created combined
            if (array_search("createdby", array_keys(array_change_key_case($row)))!==false) {
                $row["createdstaffdatetime"] = $this->getStaffNameDate($row["createdby"], $row["createddate"]);
            }
            
            //load system fields - modified combined
            if (array_search("modifiedby", array_keys(array_change_key_case($row)))!==false) {
                $row["modifiedstaffdatetime"] = $this->getStaffNameDate($row["modifiedby"], $row["modifieddate"]);
            }
            return $row;
        } else {
            die ("No Records Found.");
        }
    }
    
    private function getStaffNameDate($id,$date) {
        global $conn;
        if ($id!="" && !is_null($id)) {
            $sql = "select * from hr_staff where staff_id = ".$row["createdby"];
            $result = mysql_query($sql,$conn);
            if (mysql_num_rows($result)>0) {
                $out = mysql_fetch_array($result)["name"];
            } else {
                $out = $row["createdstaffdatetime"] = "System";
            }
            
            if ($date!="") {
                $out .=", $date";
            }
            
        } else {
            if ($date!="") {
                $out = "System, ".$date;
            } else {
                $out = "System";
            }
        }
        return $out;
    } 
}

?>
