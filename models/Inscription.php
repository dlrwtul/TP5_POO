<?php 
namespace App\models;

use App\core\Model;
use App\core\Constantes;
use Nette\Utils\Strings;

class Inscription extends Model {

    private int $id;
    private string $etat;

    public function __construct()
    {
        $this->etat = "en cours";
    }


    public function etudiant(?int $id = null):Etudiant
    {
        if ($id != null) {
           return Etudiant::findById($id);
        }
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


    public function insert():int
    {
        $anneeScolaire = AnneeScolaire::findLang('etat','en cours');
        $sql = "INSERT INTO `".self::table()."`( `etat`, `etudiant_id`, `classe_id`, `ac_id`,`annee_scolaire_id`) VALUES (?,?,?,?,?)";
        return self::prepareUpdate($sql,[$this->etat,$_SESSION['etudiant_id'],$_SESSION['classe_id'],$_SESSION[Constantes::USER_KEY]->id,$anneeScolaire->id]);
    }

    public static function newInscription($data){
        $data['matricule'] = Etudiant::generateMatricule();
        $data['password'] = Etudiant::generatePassword($data['login']);
        $_SESSION["etudiant_id"] = Etudiant::insertNewObj($data);

        $classe = Classe::findLang('libelle',$data['classe']);
        $_SESSION['classe_id'] = $classe->id;

        $inscription = new Inscription();
        return $inscription->insert();
    }

}