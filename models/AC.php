<?php 

namespace App\models;
use App\config\Constantes;
class AC extends User {
    
    public function __construct()
    {
        $this->role = Constantes::ROLE_AC;
    }

    public function inscriptions():array {
        return [];
    }

    public static function findAll():array
    {
        $sql = "select * from '".self::getTableName()."' where role like ".Constantes::ROLE_AC;
        echo $sql;
        return [];
    }
}