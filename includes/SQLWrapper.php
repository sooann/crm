<?php

/**
 * Description of SQLWrapper
 *
 * @author user
 */
class SQLWrapper {
    //put your code here
    
    private static $dbwhitelist = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-';
    private $NumberDatatypes = array("BIT","TINYINY","BOOL","BOOLEAN","SMALLINT","INT","INTEGER","BIGINT","DECIMAL","DEC","FLOAT","DOUBLE");
    private $DateDatetypes = array("DATE","DATETIME","TIMESTAMP","TIME");
    private $StringDatatypes = array("CHAR","NCHAR","VARCHAR","NVARCHAR","BINARY","VARBINARY","TINYBLOB","TINYTEXT","BLOB","TEXT","MEDIUMBLOB","MEDIUMTEXT","LONGBLOB","LONGTEXT","ENUM","SET");
    
    private $param = array();
    private $paramcount = 0;
    private $table;
    private $columns;
    private $sql;
    private $newid;
    private $executiontime;
    private $sqlerror;
    private $sqlauditid;
    
    
    public function __construct($table) {
        $this->table = $table;
        $this->loadTable();
    }
    
    public function getTable() {
        return $this->table;
    }
    
    public function setTable($table) {
        $this->table=$table;
        $this->loadTable();
    }
    
    public function loadTable() {
        $result = self::showTables($this->table);
        if ($result!=false) {
            if ($result!=$this->table) {
                $this->table = $result;
            }
            $this->columns = self::showColumns($this->table);
        } else {
            die ("table ".$this->table." is not found.");
        }
    }
    
    public function getColumns() {
        return $this->columns;
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
            
    public function addparam($column,$value,$datatype=NULL) {
        
        //search for parameter
        $found=false;
        
        for ($i=0;$i<count($this->columns);$i++){
            if (strcasecmp($column, $this->columns[$i]["Field"])==0) {
                if ($datatype==NULL) {
                    //check data conversion matching
                    if (array_search(strtoupper(preg_replace('/\(.*\)/','',$this->columns[$i]['Type'])),$this->NumberDatatypes)!==false) {
                        $datatype="int";
                    } elseif (array_search(strtoupper(preg_replace('/\(.*\)/','',$this->columns[$i]['Type'])),$this->DateDatetypes)!==false) {
                        $datatype="date";
                    } elseif (array_search(strtoupper(preg_replace('/\(.*\)/','',$this->columns[$i]['Type'])),$this->StringDatatypes)!==false) {
                        $datatype="text";
                    } else {
                        die("unable to find data type for parameter $column.");
                    }
                }
                $found=true;
            } 
        }
        
        if ($found) {
            $this->setParamCount($this->getParamCount()+1);
            $this->param[$this->getParamCount()] = new Datafield ($column,$value,$datatype);
            return $this->getParamCount();
        } else {
            die ("Field $this->table.$column is not found.");
        }
        
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
        //auto add createdby and createddate
        
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
        //auto add modifiedby and modifieddate
        
        $this->sql = "update ".$this->table." set ";
        for ($i=1; $i<=$this->getParamCount();$i++) {
            //generate Columns
            $this->sql .= $this->param[$i]->getColumn(). " = ";
            $this->sql .= $this->getSQLValueStatement($this->param[$i]->getValue(), $this->param[$i]->getDatatype());
            
            if ($i!=$this->getParamCount()) {
                $this->sql .=",";
            }
        }
        $this->sql .= " where ".$condition;
        
        return $this->executeSQL();
    }
    
    private function getSQLValueStatement ($value, $datatype) {
        if ($datatype=="text" || $datatype=="date") {
            return "'".escapesql($value)."'";
        } elseif ($datatype=="int" || $datatype=="float") {
            return escapesql($value);
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
            die ("Query: [$this->sql];<br />$this->sqlerror");
            return $result;
        }
    }
    
    private function logSQL() {
        //add query into log
        $logsql = "insert into SYS_SQLAudit(SQLStatement,newrecordid,sessionid,executiontime,createdby,createddate) values (";
        $logsql .= "'". escapesql($this->sql)."',";
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
            echo("SQL Logging unavailable. Please contact system administrator.");
            exit();
        }
    }
    
    private function logSQLError() {
        $logsql = "insert into SYS_SQLError(SQLAudit_id,SQLStatement,Errormessage,CreatedBy,CreatedDate) values (";
        $logsql .= $this->sqlauditid.",";
        $logsql .= "'".escapesql($this->sql)."',";
        $logsql .= "'".escapesql($this->sqlerror)."',";
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
            echo ("SQL Error Logging unavailable. Please contact system administrator.");
            exit();
        }
    }
    
    public static function showTables($filter) {
        $sql = "Show tables ";
        if ($filter!="") {
            $sql .= "like '".escapesql($filter)."'";
            $result = mysql_query($sql, SQLWrapperConfiguration::getConnection());
            if (mysql_num_rows($result)==0) {
                //get list of tables
                $sql = "show tables";
                $result = mysql_query($sql, SQLWrapperConfiguration::getConnection());
                if (mysql_num_rows($result)>0) {
                    //allow only white charaters
                    while ($row = mysql_fetch_row($result)) {
                        if (strcasecmp(whitelist($row[0], self::$dbwhitelist),$filter)==0) {
                            return $row[0];
                        }
                    }
                    return false;
                } else {
                    return false;
                }
            } else {
                while ($row = mysql_fetch_row($result)) {
                    return $row[0];
                }
            }
        } else {
            return false;
        }
    } 
    
    public static function showColumns($table) {
        
        if ($table!="") {
            $sql = "Show columns from ".escapesql($table);
            $output = array();
            
            $result = mysql_query($sql, SQLWrapperConfiguration::getConnection());
            if ($result) {
                if (mysql_num_rows($result)>0) {
                    while ($row = mysql_fetch_array($result)){
                        array_push($output, $row);
                    }
                    return $output;
                } else {
                    return false;
                }
            } else {
                die("table $table not found.");
            }
        } else {
            return false;
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
