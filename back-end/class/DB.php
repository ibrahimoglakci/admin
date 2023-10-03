<?php

class DB extends Upload
{

    const host = "localhost";
    const username = "root";
    const password = "";
    const database = "admin";
    const charset = "utf8";
    protected static $connection;
    public static $table;
    public static $select = "*";
    public static $whereRawKey;
    public static $whereRawValue;
    public static $whereKey;
    public static $whereValue = array();
    public static $orderBy = NULL;
    public static $limit = NULL;
    public static $join = "";
    public static $leftjoin = "";



    function __construct()
    {
        self::__connect();
    }



    public static function __connect()
    {

        try {
            self::$connection = new PDO("mysql:host=" . self::host . ";dbname=" . self::database . ";charset=" . self::charset, self::username, self::password);

        } catch (PDOException $error) {
            $errordata = (Object) ["type" => "501", "message" => "An error occurred while connecting to the database", "title" => "Database Connection Error", "code" => $error->getMessage()];

            return self::viewError("connection", $errordata);
        }
    }

    public static function table($table)
    {
        self::$table = $table;
        self::$select = "*";
        self::$whereRawKey = NULL;
        self::$whereRawValue = NULL;
        self::$whereKey = NULL;
        self::$whereValue = array();
        self::$orderBy = NULL;
        self::$limit = NULL;
        self::$join = "";
        self::$leftjoin = "";
        return new self; 

    }

    public static function select($columns)
    {
        self::$select = (is_array($columns)) ? implode(",", $columns) : $columns;

        return new self;
    }

    public static function whereRaw($whereRaw, $whereRawValue)
    {
        self::$whereRawKey = "(" . $whereRaw . ")";
        self::$whereRawValue = $whereRawValue;
        return new self;
    }

    public static function where($col1, $col2 = NULL, $col3 = NULL)
    {
        if (is_array($col1) != false) {
            $keyList = array();
            foreach ($col1 as $key => $value) {
                self::$whereValue[] = $value;
                $keyList[] = $key;
            }
            self::$whereKey = implode("=? AND ", $keyList) . "=?";
        } else if ($col2 != NULL && $col3 == NULL) {
            self::$whereValue[] = $col2;
            self::$whereKey = $col1 . "=?";
        } else if ($col3 != NULL) {
            self::$whereValue[] = $col3;
            self::$whereKey = $col1 . $col2 . "?";
        }

        return new self;
    }

    public static function orderby($orders)
    {
        self::$orderBy = $orders[0] . " " . ((!empty($orders[1])) ? $orders[1] : "ASC");
        return new self;
    }

    public static function limit($start, $end = NULL)
    {
        self::$limit = $start . (($end != NULL) ? "," . $end : "");
        return new self;
    }

    public static function join($tableName, $currentColumns, $targetColumns)
    {
        self::$join .= "INNER JOIN " . $tableName . " ON " . self::$table . "." . $currentColumns . "=" . $tableName . "." . $targetColumns . " ";
        return new self;
    }
    public static function leftjoin($tableName, $currentColumns, $targetColumns)
    {
        self::$leftjoin .= "LEFT JOIN " . $tableName . " ON " . self::$table . "." . $currentColumns . "=" . $tableName . "." . $targetColumns . " ";
        return new self;
    }

    public static function get()
    {
        $SQL = "SELECT " . self::$select . " FROM " . self::$table . " ";
        $SQL .= (!empty(self::$join)) ? self::$join : "";
        $SQL .= (!empty(self::$leftjoin)) ? self::$leftjoin : "";
        $WHERE = NULL;
        if (!empty(self::$whereKey) && !empty(self::$whereRawKey)) {
            $SQL .= "WHERE " . self::$whereKey . " AND " . self::$whereRawKey . " ";
            $WHERE = array_merge(self::$whereValue, self::$whereRawValue);
        } else {
            if (!empty(self::$whereKey)) {
                $SQL .= "WHERE " . self::$whereKey . " ";
                $WHERE = self::$whereValue;
            }
            if (!empty(self::$whereRawKey)) {
                $SQL .= "WHERE " . self::$whereRawKey . " ";
                $WHERE = self::$whereRawValue;
            }
        }
        $SQL .= (!empty(self::$orderBy)) ? "ORDER BY " . self::$orderBy . " " : "";
        $SQL .= (!empty(self::$limit)) ? "LIMIT " . self::$limit : "";
        if ($WHERE != NULL) {
            $Entity = self::$connection->prepare($SQL);
            $Sync = $Entity->execute($WHERE);
        } else {
            $Entity = self::$connection->query($SQL);
        }
        $Result = $Entity->fetchAll(PDO::FETCH_ASSOC);

        if ($Result != false) {
            $data = [];
            foreach ($Result as $item) {
                $data[] = (object) $item;
            }

            return $data;

        } else {

            return false;
        }
    }

    public static function first()
    {
        $entity = self::get();
        if ($entity) {
            return $entity[0];
        } else {
            return false;
        }
    }

    public static function insert($arrayCol)
    {
        $columns = array_keys($arrayCol);
        $columnsValue = array_values($arrayCol); 
        $SQL = "INSERT INTO " . self::$table . " SET " . implode("=?, ", $columns) . "=?";
        $Entity = self::$connection->prepare($SQL);
        $sync = $Entity->execute($columnsValue);
        if ($sync) {
            return true;
        } else {
            return false;
        }
    }

    public static function update($arrayCol)
    {
        $columns = array_keys($arrayCol);
        $columnsValue = array_values($arrayCol);
        $SQL = "UPDATE " . self::$table . " SET " . implode("=?, ", $columns) . "=? ";
        $WHERE = NULL;
        if (!empty(self::$whereKey) && !empty(self::$whereRawKey)) {
            $SQL .= "WHERE " . self::$whereKey . " AND " . self::$whereRawKey . " ";
            $WHERE = array_merge(self::$whereValue, self::$whereRawValue);
        } else {
            if (!empty(self::$whereKey)) {
                $SQL .= "WHERE " . self::$whereKey . " ";
                $WHERE = self::$whereValue;
            }
            if (!empty(self::$whereRawKey)) {
                $SQL .= "WHERE " . self::$whereRawKey . " ";
                $WHERE = self::$whereRawValue;
            }
        }
        if ($WHERE != NULL) {
            $arrayCol = array_merge($columnsValue, $WHERE);
        }
        $Entity = self::$connection->prepare($SQL);
        $sync = $Entity->execute($arrayCol);
        if ($sync) {
            return true;
        } else {
            return false;
        }

    }

    public static function delete() {
        $SQL="DELETE FROM ".self::$table." ";
        $WHERE = NULL;
        if (!empty(self::$whereKey) && !empty(self::$whereRawKey)) {
            $SQL .= "WHERE " . self::$whereKey . " AND " . self::$whereRawKey . " ";
            $WHERE = array_merge(self::$whereValue, self::$whereRawValue);
        } else {
            if (!empty(self::$whereKey)) {
                $SQL .= "WHERE " . self::$whereKey . " ";
                $WHERE = self::$whereValue;
            }
            if (!empty(self::$whereRawKey)) {
                $SQL .= "WHERE " . self::$whereRawKey . " ";
                $WHERE = self::$whereRawValue;
            }
        }
        $Entity = self::$connection->prepare($SQL);
        $sync = $Entity->execute($WHERE);
        if ($sync) {
            return true;
        } else {
            return false;
        }

    }

    public static function updateOrCreate($whereArray,$columnsArray) {
        self::where($whereArray);
        $result=self::first();
        if($result) {
            return self::update($columnsArray);
        }else {
            return self::insert($columnsArray);
        }
    }

    public static function primaryKey($tableName) {
        $SQL="SHOW TABLE STATUS FROM ".self::database." WHERE Name='".$tableName."'";
        $Entity=self::$connection->query($SQL);
        $result=$Entity->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]["Auto_increment"];
    }

    public static function viewError($type, $error)
    {
        $file = "errors/" . $type . ".php";
        if (file_exists($file))
            include_once($file);
        elseif (file_exists("../" . $file))
            include_once("../" . $file);

    }

}