<?php
namespace App\models;

use App\core\Constantes;
use App\core\Model;
class Demande extends Model{
    private int $id;
    private string $motif;
    private string $etat;

    public static function getTableName():string
    {
        self::$table = Constantes::TABLE_DEMANDE;
        return self::$table;
    }

    public function etudiant():Etudiant
    {
        return new Etudiant();
    }

    public function RP():RP
    {
        return new RP();
    }

    public function inscription():Inscription {
        return new Inscription;
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
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

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