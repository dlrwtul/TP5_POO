<?php
namespace App\models;
use App\core\Model;
class Demande extends Model{
    private int $id;
    private string $motif;
    private string $etat;

    public static function getTableName():string
    {
        self::$table = 'demande';
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
}