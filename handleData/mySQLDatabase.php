<?php

    require("connectDatabase.php");

    // Keys => "key1, key2" Values => "'$value1','$value2'"
    function mySqlInsertData($tableName, $keys, $values) {
        global $con;
        $queryInsert = "insert into $tableName($keys)
                        value($values)";
        $query = mysqli_query($con, $queryInsert);
        return $query;
    }

    function mySqlSelectData($tableName, $id = null) {
        global $con;
        $queryGetData = "select * from $tableName ORDER BY name";

        if(isset($_GET['search'])){
            $queryGetData = "select * from $tableName where name REGEXP '{$_GET['search']}'";
        }

        if($id){
            $queryGetData = "select * from $tableName where id='$id'";
        }

        $res = mysqli_query($con, $queryGetData);
        return $res;
    }

    function mySqlDeleteData($tableName, $id) {
        global $con;
        $queryDelete = "delete from $tableName where id=$id";
        $deleted = mysqli_query($con, $queryDelete);
        return $deleted;
    }

    // Data => "data1='$data1', data2='$data2'"
    function mySqlUpdateData($tableName, $data, $id) {
        global $con;
        $queryUpdate = "update $tableName set $data where id=$id";
        $query = mysqli_query($con, $queryUpdate);
        return $query;
    }
