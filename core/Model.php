<?php
namespace App\core;

abstract class Model implements IModel {

    protected static string $table ;

    public static function getTableName():string
    {
        return '';
    }


    public function insert():int
    {
        return 0;
    }

    public static function prepareUpdate(string $sql,array $datas)
    {
        $DB = new Database();
        $DB->connectDB();
        $result = $DB->executeUpdate($sql,$datas);
        $DB->disconnectDB();
        return $result;
    }

    public function update():int
    {
        return 0;
    }

    public static function delete(int $id):int
    {
        $sql = "delete from `".self::getTableName()."` where id = ?";
        return self::prepareUpdate($sql,[$id]);
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` ";
        return self::findBy($sql);
    }

    public static function findById(int $id):null|object
    {
        $sql = "select * from `".self::getTableName()."` where id = ?";
        return self::findBy($sql,[$id],true);
    }

    public static function findBy(string $sql, array $datas=[], bool $single = false): null|object|array
    {
        $DB = new Database();
        $DB->connectDB();
        $results = $DB->executeSelect($sql,$datas,$single);
        $DB->disconnectDB();
        return $results;
    }

}