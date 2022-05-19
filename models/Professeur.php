<?php

namespace App\models;
use App\core\Constantes;
class Professeur extends Personne {

    private string $grade;

    public function __construct(?string $nomComplet = '', ?string $grade= '') 
    {
        $this->nomComplet = $nomComplet;
        $this->grade = $grade;
        self::$role = Constantes::ROLE_PROFESSEUR;
    }

    public function RP():RP {
        return new RP;
    }

    public function classes():array
    {
        $sql = "SELECT c.* FROM ".Constantes::TABLE_PROFESSEUR_CLASSE.",".Constantes::TABLE_CLASSE." c WHERE professeur_id = ? AND classe_id = c.id ";
        return self::findBy($sql,[$this->id]);
    }

    public function modules():array
    {
        $sql = "SELECT m.* FROM ".Constantes::TABLE_PROFESSEUR_MODULE.",".Constantes::TABLE_MODULE." m WHERE professeur_id = ? AND module_id = m.id ";
        return self::findBy($sql,[$this->id]);
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::table()."`( `nom_complet`, `role`, `grade`) VALUES (?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,self::$role,$this->grade]);
    }

    public static function findAll():array
    {
        $className = get_called_class();
        $array = explode("\\", $className);
        $last = end($array);
        $sql = "select * from `".self::table()."` where role like ?";
        return self::findBy($sql,[Constantes::ROLE_PROFESSEUR]);
    }
}