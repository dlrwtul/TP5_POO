<?php 
namespace App\models;
use App\core\Model;
class Inscription extends Model {
    private int $id;

    public static function getTableName():string
    {
        self::$table = 'inscription';
        return self::$table;
    }
    
    public function etudiant():Etudiant
    {
        return new Etudiant();
    }

    public function AC():AC
    {
        return new AC();
    }

    public function classe():Classe
    {
        return new Classe();
    }

    public function anneeScolaire():AnneeScolaire
    {
        return new AnneeScolaire();
    }

    public function demandes():array {
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
}