<?php
namespace App\models;
class AnneeScolaire {
    private int $id;
    private string $libelle;
    private string $enCours;

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
}