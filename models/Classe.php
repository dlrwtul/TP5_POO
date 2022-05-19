<?php 
namespace App\models;

use App\core\Model;
use App\core\Session;
use App\core\Constantes;
use Nette\Utils\Strings;

class Classe extends Model {
    
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;

    public function __construct(?string $libelle = null,?string $filiere = null,?string $niveau = null)
    {
        $this->libelle = $libelle;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
    }

    public function RP():RP {
        return new RP;
    }

    public function inscriptions():array {
        return [];
    }

    public function professeurs():array
    {
        $sql = "SELECT p.* FROM ".Constantes::TABLE_PROFESSEUR_CLASSE.",".Constantes::TABLE_PERSONNE." p WHERE classe_id = ? AND professeur_id = p.id ";
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

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function insert():int
    {
        $sql = "INSERT INTO `".self::table()."`( `libelle`, `niveau`, `filiere`,`rp_id`) VALUES (?,?,?,?)";
        return self::prepareUpdate($sql,[$this->libelle,$this->niveau,$this->filiere,$_SESSION[Constantes::USER_KEY]->id]);
    }

}
