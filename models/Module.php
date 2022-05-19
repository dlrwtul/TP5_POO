<?php
namespace App\models;

use App\core\Model;
use App\core\Constantes;
use Nette\Utils\Strings;

class Module extends Model {
    
    private int $id;
    private string $libelle;


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

}