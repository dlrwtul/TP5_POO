<?php 
namespace App\core;

interface IModel {

    public function insert():int;
    
    public static function update($attribute,$value,int $id):int;
    public static function getTableName():string;
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):null|object;
    public static function findBy(string $request,array $datas,bool $single = false):null|object|array;

}