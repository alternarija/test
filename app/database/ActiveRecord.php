<?php
namespace App\Database;

use App\Database\Db;

class ActiveRecord
{

    public static function get($filter = ""){

        $table = static::$table; //table name
        $key = static::$key; //primary key column
        $db = Db::getConnection();
        $arr = array();
        $res= $db->query("select * from {$table} {$filter}");
        $res->setFetchMode(\PDO::FETCH_CLASS,get_called_class());
        while($rw = $res->fetch()){
            $arr[] = $rw;
        }
        return $arr;
    }
    public static function getById($id){

        $table = static::$table;
        $key = static::$key;
        $db = Db::getConnection();
        $st = $db->prepare("select * from {$table} where $key = :id");
        $st->bindValue(":id",$id);
        $st->execute();
        $st->setFetchMode(\PDO::FETCH_CLASS,get_called_class());
        $rw = $st->fetch();
        return $rw;

    }
    public function insert(){

        $table = static::$table;
        $key = static::$key;
        $param = $this->prepareStatement();
        $db = Db::getConnection();
        $st = $db->prepare("insert into $table set $param");
        $this->bind($st);
        $st->execute();
        $this->$key = $db->lastInsertId();


    }
    public function update($id){

        $table = static::$table;
        $key = static::$key;
        $param = $this->prepareStatement();
        $db = Db::getConnection();
        $st = $db->prepare("update {$table} set $param where $key = {$id}");
        $this->bind($st);
        $st->execute();
    }
    public static function delete($id){

        $table = static::$table;
        $key = static::$key;
        $db = Db::getConnection();
        $st = $db->prepare("delete from {$table} where $key = :id");
        $st->bindValue(":id",$id);
        $st->execute();

    }
    public function bind($st){

    /*iteration through object*/
        foreach($this as $k=>$v){
            if($k == static::$key) continue;
            $st->bindValue(":$k",$v);  //bindValue for every object property except id
        }
        return $st;

    }
    public function prepareStatement(){
        
        $par = '';
        foreach($this as $k=>$v){
            if($k === static::$key) continue;
            $par .= $k . "=:" . $k . ",";
        }
        $param = rtrim($par,',');
        return $param;
    }


}
