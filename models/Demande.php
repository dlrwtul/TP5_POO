<?php
namespace App\models;

use App\core\Model;
use App\core\Constantes;
use Nette\Utils\Strings;

class Demande extends Model{
    private int $id;
    private string $objet;
    private string $motif;
    private string $etat;

    public function __construct(?string $objet = null,?string $motif = null)
    {
        $this->objet = $objet;
        $this->motif = $motif;
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

        /**
     * Get the value of objet
     */ 
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set the value of objet
     *
     * @return  self
     */ 
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    public function insert():int
    {
        $datec = new \DateTime('now');
        $date= $datec->format("d-m-y");
        $sql = "INSERT INTO `".self::table()."`(`objet`, `motif`, `date`, `etat`,`inscription_id`,`etudiant_id`,`rp_id`) VALUES (?,?,?,?,?,?,?)";
        return self::prepareUpdate($sql,[$this->objet,$this->motif,$date,'en attente',$_SESSION['inscription_id'],$_SESSION[Constantes::USER_KEY]->id,null]);
    }

}