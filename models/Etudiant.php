<?php 
namespace App\models;
use App\core\Constantes;

class Etudiant extends User {

    private string $sexe;
    private string $adresse;
    private string $matricule;

    public function demandes():array {
        return [];
    }

    public function inscriptions():array {
        $sql = "SELECT i.* FROM ".Constantes::TABLE_INSCRIPTION." i,".self::table()." e WHERE etudiant_id = ? AND etudiant_id = e.id ";
        return self::findBy($sql,[$this->id]);
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

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    public static function generateMatricule(){
        $date = new \DateTime;
        $matricule = $date->format("h").$date->format("i").$date->format("s").$date->format("Y").$date->format("d").$date->format("m");
        return $matricule;
    }

    public static function generatePassword(string $login){
        $lastPartLogin = explode('@',$login)[0];
        $date = new \DateTime;
        $matricule = $lastPartLogin.$date->format("Y");
        return $matricule;
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::table()."`( `nom_complet`, `login`, `password`, `role`,`matricule`, `sexe`,`adresse`) VALUES (?,?,?,?,?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,$this->login,$this->password,self::$role,$this->matricule,$this->sexe,$this->adresse]);
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::table()."` where role like '".Constantes::ROLE_ETUDIANT."'";
        return self::findBy($sql);
    }

}