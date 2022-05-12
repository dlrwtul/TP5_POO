<?php 

namespace App\models;
use App\core\Constantes;
class AC extends User {
    
    public function __construct()
    {
        $this->role = Constantes::ROLE_AC;
    }

    public function inscriptions():array {
        return [];
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::getTableName()."`( `nom_complet`, `login`, `password`, `role`) VALUES (?,?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,$this->login,$this->password,self::$role]);
    }


    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` where role like '".Constantes::ROLE_AC."'";
        return self::findBy($sql);
    }
}