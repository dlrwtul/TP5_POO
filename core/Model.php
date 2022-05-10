<?php

namespace App\core;
use App\config\constantes;

abstract class Model implements IModel {

    protected static string $table;

    public static function getTableName():string
    {
        self::$table = '';
        return self::$table;
    }


    public function insert():int
    {
        return 0;
    }

    public static function prepareUpdate(string $sql,array $datas)
    {
        $DB = new Database();
        $DB->connectDB();
        $results = $DB->executeUpdate($sql,$datas);
        $DB->disconnectDB();
        return $results;
    }

    public function update():int
    {
        return 0;
    }

    public function delete():int
    {
        $sql = "delete from '".self::getTableName()."'where id = ?";
        return 0;
    }

    public static function findAll():array
    {
        $sql = "select * from '".self::getTableName()."'";
        return self::findBy($sql,[]);
    }

    public static function findById(int $id):null|object
    {
        $sql = "select * from '".self::getTableName()."'where id = ?";
        return self::findBy($sql,[$id]);
    }

    public static function findBy(string $sql, array $datas, bool $single = false): null|object|array
    {
        $DB = new Database();
        $DB->connectDB();
        $results = $DB->executeSelect($sql,$datas,$single);
        $DB->disconnectDB();
        return $results;
    }

}