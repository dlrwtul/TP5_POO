<?php 
namespace App\core;

interface IModel {
    public function insert():int;
    public function update():int;
    public function delete():int;

    public static function findAll():array;
    public static function findById(int $id):null|object;
    public static function findBy(string $request,array $datas,bool $single = false):null|object|array;

}