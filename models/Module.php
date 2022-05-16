<?php
namespace App\models;

use App\core\Constantes;
use App\core\Model;
class Module extends Model {
    
    private int $id;
    private string $libelle;

    public static function getTableName():string
    {
        self::$table = Constantes::TABLE_MODULE;
        return self::$table;
    }

    public function professeurs():array
    {
        $sql = "SELECT p.* FROM ".Constantes::TABLE_PROFESSEUR_MODULE.",".Constantes::TABLE_PERSONNE." p WHERE module_id = ? AND professeur_id = p.id ";
        return self::findBy($sql,[$this->id]);
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

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` ";
        return self::findBy($sql);
    }

    public static function findLang($where,$like):null|object
    {
        $sql = "select * from `".self::getTableName()."` where ".$where." = ?";
        return self::findBy($sql,[$like],true);
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