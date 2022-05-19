<?php
namespace App\core;

use Digia\InstanceFactory\InstanceFactory;
use Nette\Utils\Strings;


abstract class Model implements IModel {

    protected static string $table = 'table' ;

    public static function getTableName():string
    {
        return '';
    }

    public static function table():array|string
    {
        $className = get_called_class();
        $array = explode("\\", $className);
        $last = end($array);

        if ($last == "RP" || $last == "AC" || $last == "Etudiant" || $last == "User" || $last == "Professeur") {
            $last = "personne";
        }

        $lastest = Strings::firstLower($last);
        $res = Strings::matchAll($lastest, '~[A-Z]~');
        foreach ($res as $re) {
            foreach ($re as $key => $r) {
                $lastest = Strings::replace($lastest,"~[".$r."]~",'_'.strtolower($r));
            }
        }

        return $lastest;
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

    public static function update($attribute,$value,int $id):int
    {
        $sql = "update `".self::table()."` SET ".$attribute." = ? WHERE id = ?";
        return self::prepareUpdate($sql,[$value,$id]);
    }

    public static function delete(int $id):int
    {
        $sql = "delete from `".self::table()."` where id = ?";
        return self::prepareUpdate($sql,[$id]);
    }

    public static function findAll():array
    {

        $sql = "select * from `".self::table()."` ";
        return self::findBy($sql);
    }

    public static function findById(int $id):null|object
    {
        $sql = "select * from `".self::table()."` where id = ?";
        return self::findBy($sql,[$id],true);
    }

    public static function findLang($where,$like):null|object
    {
        $sql = "select * from `".self::table()."` where ".$where." = ?";
        return self::findBy($sql,[$like],true);
    }

    public static function findBy(string $sql, array $datas=[], bool $single = false): null|object|array
    {
        $DB = new Database();
        $DB->connectDB();
        $results = $DB->executeSelect($sql,$datas,$single);
        $DB->disconnectDB();
        return $results;
    }

    public static function instancieur($className,$datas) {
        return InstanceFactory::fromProperties($className,$datas);
    }

    public static function insertNewObj($datas):int {
        $object = self::instancieur(get_called_class(),$datas);
        $lastInsertId = $object->insert();
        return $lastInsertId;
    }

}