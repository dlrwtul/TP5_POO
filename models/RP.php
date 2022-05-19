<?php 

namespace App\models;
use App\core\Constantes;

class RP extends User {

    public function __construct()
    {
        self::$role = Constantes::ROLE_RP;
    }

    public function demandes():array {
        return [];
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::table()."`( `nom_complet`, `login`, `password`, `role`) VALUES (?,?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,$this->login,$this->password,self::$role]);
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::table()."` where role like '".Constantes::ROLE_RP."'";
        return self::findBy($sql);
    }
}