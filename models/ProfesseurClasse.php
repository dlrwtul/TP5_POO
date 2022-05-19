<?php 
namespace App\models;
use App\core\Model;
use Nette\Utils\Strings;

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

    
}