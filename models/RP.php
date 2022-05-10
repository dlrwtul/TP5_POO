<?php 

namespace App\models;
use App\config\Constantes;

class RP extends User {

    public function __construct()
    {
        $this->role = Constantes::ROLE_RP;
    }

    public function demandes():array {
        return [];
    }

    public static function findAll():array
    {
        $sql = "select * from '".self::getTableName()."' where role like ".Constantes::ROLE_RP;
        echo $sql;
        return [];
    }
}