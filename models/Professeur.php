<?php

namespace App\models;
use App\config\Constantes;
class Professeur extends Personne {

    private string $grade;

    public function __construct()
    {
        self::$role = Constantes::ROLE_PROFESSEUR;
    }


    public function classes():array
    {
        return [];
    }

    public function modules():array
    {
        return [];
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
        $sql = "INSERT INTO `".self::getTableName()."`( `nom_complet`, `role`, `grade`) VALUES (?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,self::$role,$this->grade]);
    }


    public static function findAll():array
    {
        $sql = "select * from '".self::getTableName()."' where role like ".constantes::ROLE_PROFESSEUR;
        return self::findBy($sql,[]);
    }
}