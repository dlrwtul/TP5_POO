<?php
namespace App\models;

use App\config\Constantes;
use App\core\Model;
class AnneeScolaire extends Model {
    private int $id;
    private string $libelle;
    private string $enCours;

    public static function getTableName():string
    {
        self::$table = Constantes::TABLE_ANNEE_SCOLAIRE;
        return self::$table;
    }

    public function inscriptions():array {
        return [];
    }

    public function professeurClasses():array
    {
        return [];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of enCours
     */ 
    public function getEnCours()
    {
        return $this->enCours;
    }

    /**
     * Set the value of enCours
     *
     * @return  self
     */ 
    public function setEnCours($enCours)
    {
        $this->enCours = $enCours;

        return $this;
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` ";
        return self::findBy($sql);
    }

    public static function delete(int $id):int
    {
        $sql = "delete from `".self::getTableName()."` where id = ?";
        return self::prepareUpdate($sql,[$id]);
    }

    public static function findById(int $id):null|object
    {
        $sql = "select * from `".self::getTableName()."` where id = ?";
        return self::findBy($sql,[$id],true);
    }
}