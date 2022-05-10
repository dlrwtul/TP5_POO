<?php 
namespace App\models;
use App\core\Model;
class ProfesseurClasse extends Model {
    private int $id;
    
    public function professeur():Professeur
    {
        return new Professeur;
    }

    public function classe():Classe
    {
        return new Classe;
    }

    public function anneeScolaire():AnneeScolaire
    {
        return new AnneeScolaire;
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