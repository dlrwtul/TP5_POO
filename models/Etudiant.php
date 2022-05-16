<?php 
namespace App\models;
use App\core\Constantes;

class Etudiant extends User {

    private string $sexe;
    private string $adresse;
    private string $matricule;

    
    public function __construct(?string $nomComplet=null,?string $login=null,?string $password =null, ?string $sexe= null,?string $adresse= null,?string $matricule = null)
    {
        $this->nomComplet = $nomComplet;
        $this->login = $login;
        $this->password = $password;
        $this->sexe = $sexe;
        $this->adresse = $adresse;
        $this->matricule = $matricule;
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
        $sql = "INSERT INTO `".self::getTableName()."`( `nom_complet`, `login`, `password`, `role`,`matricule`, `sexe`,`adresse`) VALUES (?,?,?,?,?,?,?)";
        return self::prepareUpdate($sql,[$this->nomComplet,$this->login,$this->password,self::$role,$this->matricule,$this->sexe,$this->adresse]);
    }

    public static function insertNewObj($datas):int {
        $object = self::instancieur(self::class,$datas);
        $lastInsertId = $object->insert();
        return $lastInsertId;
    }

    public static function findAll():array
    {
        $sql = "select * from `".self::getTableName()."` where role like '".Constantes::ROLE_ETUDIANT."'";
        return self::findBy($sql);
    }

}