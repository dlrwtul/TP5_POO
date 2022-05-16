<?php

namespace App\models;
use App\core\Constantes;
class Professeur extends Personne {

    private string $grade;

    public function __construct(?string $nomComplet = null, ?string $grade= null) 
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

    public static function insertNewObj($datas):int {
        $object = self::instancieur(self::class,$datas);
        $lastInsertId = $object->insert();
        return $lastInsertId;
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::getTableName()."`( `nom_complet`, `role`, `grade`) VALUES (?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,self::$role,$this->grade]);
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` where role like '".constantes::ROLE_PROFESSEUR."'";
        return self::findBy($sql);
    }

}