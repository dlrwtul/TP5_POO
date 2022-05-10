<?php 
namespace App\models;
use App\config\Constantes;

class Etudiant extends User {

    protected string $sexe;
    protected string $adresse;
    
    public function __construct()
    {
        self::$role = Constantes::ROLE_ETUDIANT;
    }

    public function demandes():array {
        return [];
    }

    public function inscriptions():array {
        return [];
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::getTableName()."`( `nom_complet`, `login`, `password`, `role`, `sexe`,`adresse`) VALUES (?,?,?,?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,$this->login,$this->password,self::$role,$this->sexe,$this->adresse]);
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` where role like '".Constantes::ROLE_ETUDIANT."'";
        return self::findBy($sql);
    }
}