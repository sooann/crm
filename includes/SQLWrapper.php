<?php

/**
 * Description of SQLWrapper
 *
 * @author user
 */
class SQLWrapper {
    //put your code here
    
    private $param = array();
    private $paramcount = 0;
    private $table;
    private $sql;
    private $newid;
    private $executiontime;
    private $sqlerror;
    private $sqlauditid;
    
    public function __construct($table) {
        $this->table = $table;
    }
    
    public function getTable() {
        return $this->table;
    }
    
    public function setTable($table) {
        $this->table=$table;
    }
    
    public function getParamCount() {
        return $this->paramcount;
    }
    
    private function setParamCount($paramcount) {
        $this->paramcount = $paramcount;
    }
    
    private function getExecutionTime() {
        return $this->executiontime;
    }
    
    private function getSQLError() {
        return $this->sqlerror;
    }
            
    public function addparam($column,$value,$datatype) {
        $this->setParamCount($this->getParamCount()+1);
        $this->param[$this->getParamCount()] = new Datafield ($column,$value,$datatype);
        return $this->getParamCount();
    }
    
    public function removeparam() {
        array_pop($this->param);
        $this->setParamCount($this->getParamCount()-1);
    }
    
    public function removeallparam() {
        $this->param = array();
        $this->setParamCount(0);
    }
    
    public function insert() {
        $this->sql = "insert into ".$this->table." (";
        for ($i=1; $i<=$this->getParamCount();$i++) {
            //generate Columns
            $this->sql .= $this->param[$i]->getColumn();
            if ($i!=$this->getParamCount()) {
                $this->sql .=",";
            }
        }
        $this->sql .= ") values (";
        for ($i=1; $i<=$this->getParamCount();$i++) {
            //Generate values
            $this->sql .= $this->getSQLValueStatement($this->param[$i]->getValue(), $this->param[$i]->getDatatype());
            
            if ($i!=$this->getParamCount()) {
                $this->sql .=",";
            }
        }
        $this->sql .= ")";
        return $this->executeSQL();
    }
    
    public function update($condition) {
        $this->sql = "update ".$this->table." set ";
        for ($i=1; $i<=$this->getParamCount();$i++) {
            //generate Columns
            $this->sql .= $this->param[$i]->getColumn(). " = ";
            $this->sql .= $this->getSQLValueStatement($this->param[$i]->getValue(), $this->param[$i]->getDatatype());
            
            if ($i!=$this->getParamCount()) {
                $this->sql .=",";
            }
        }
        $this->sql .= " where ".str_replace("'", "''", $condition);
        
        return $this->executeSQL();
    }
    
    private function getSQLValueStatement ($value, $datatype) {
        if ($datatype=="text" || $datatype=="date") {
            return "'".str_replace("'", "''",$value)."'";
        } elseif ($datatype=="int" || $datatype=="float") {
            return str_replace("'", "''",$value);
        }
    }
    
    private function executeSQL () {
        //get current connection
        $currenttime = microtime(true);
        $result = mysql_query($this->sql, SQLWrapperConfiguration::getConnection());
        $this->executiontime = microtime(true) - $currenttime;
        if ($result) {
            $this->newid = mysql_insert_id();
            $this->logSQL();
            return $this->newid;
        } else {
            $this->sqlerror = mysql_error();
            $this->logSQL();
            $this->logSQLError();
            return $result;
        }
    }
    
    private function logSQL() {
        //add query into log
        $logsql = "insert into SYS_SQLAudit(SQLStatement,newrecordid,sessionid,executiontime,createdby,createddate) values (";
        $logsql .= "'".str_replace("'", "''", $this->sql)."',";
        $logsql .= "'".$this->newid."',";
        $logsql .= "'".session_id()."',";
        $logsql .= $this->executiontime.",";
        if (isset($_SESSION["user_id"])) {
            if (!is_nan($_SESSION["user_id"])) {
                $logsql .= $_SESSION["user_id"];
            } else {
                $logsql .= "NULL,";
            }
        } else {
            $logsql .= "NULL,";
        }
        $logsql .= "'".now()."'";
        $logsql .= ")";
        $result = mysql_query($logsql, SQLWrapperConfiguration::getConnection());
        if ($result) {
            $this->sqlauditid =  mysql_insert_id();
        } else {
            echo mysql_error() ."<br />";
            die("SQL Logging unavailable. Please contact system administrator.");
        }
    }
    
    private function logSQLError() {
        $logsql = "insert into SYS_SQLError(SQLAudit_id,SQLStatement,Errormessage,CreatedBy,CreatedDate) values (";
        $logsql .= $this->sqlauditid.",";
        $logsql .= "'".str_replace("'", "''", $this->sql)."',";
        $logsql .= "'".str_replace("'", "''", $this->sqlerror)."',";
        if (isset($_SESSION["user_id"])) {
            if (!is_nan($_SESSION["user_id"])) {
                $logsql .= $_SESSION["user_id"];
            } else {
                $logsql .= "NULL";
            }
        } else {
            $logsql .= "NULL,";
        }
        $logsql .= "'".now()."'";
        $logsql .= ")";
        $result = mysql_query($logsql, SQLWrapperConfiguration::getConnection());
        if (!$result) {
            echo mysql_error() ."<br />";
            die("SQL Error Logging unavailable. Please contact system administrator.");
        }
    }
    
}

class Datafield {
    
    private $column;
    private $value;
    private $datatype;
            
    public function __construct($column, $value, $datatype) {
        $this->column = $column;
        $this->value = $value;
        $this->datatype = $datatype;
    } 
    
    public function getColumn() {
        return $this->column;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function getDatatype() {
        return $this->datatype;
    }
}

class SQLWrapperConfiguration {
    
    private static $conn;
    private static $server;
    private static $username;
    private static $password;
    private static $database;
    
    public static function setConnection ($server,$username,$password,$database) {
        self::$server = $server;
        self::$username = $username;
        self::$password = $password;
        self::$database = $database;
        
        self::$conn = mysql_connect(self::$server, self::$username, self::$password);
        if(!self::$conn){
                die("Database connection failed: " . mysql_error());
        }

        // 2. Select a database to use
        $db_select = mysql_select_db(self::$database, self::$conn);
        if(!$db_select) {
                die("Database connection failed: " . mysql_error());
        }
    }
    
    public static function getConnection () {
        return self::$conn;
    } 
}
?>
