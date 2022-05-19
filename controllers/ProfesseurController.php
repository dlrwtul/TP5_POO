<?php 
namespace App\controllers;

use App\core\Constantes;
use App\core\Model;
use App\models\Classe;
use App\models\Module;
use App\models\Professeur;

class ProfesseurController extends RequestController {
    
    public function ajouterProfesseur(){
        if ($this->request->isGet()) {
            $classes = Classe::findAll();
            $modules = Module::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'professeur','ajouter.professeur.html.php',array($classes,$modules));
        }

        if ($this->request->isPost()) {
            if (!empty($_POST['nomComplet']) && !empty($_POST['grade'])) {
                if (Professeur::findLang("nom_complet", $_POST['nomComplet']) == null) {
                    $idProfesseur = Professeur::insertNewObj($_POST);
                    $this->ajouterModuleProfesseur($idProfesseur, $_POST['modulesprofesseur']);
                    $this->ajouterClasseProfesseur($idProfesseur, $_POST['classesprofesseur']);
                    $this->session->setSession('succesCreateClasse','Nouvelle Classe ajoutée .');
                    self::redirect('ajouter-professeur');
                } else {
                    $this->session->setSession('errorCreateClasse','Classe deja existante .');
                    self::redirect('ajouter-professeur');                
                }
                
            } else {
                $this->session->setSession('errorCreateClasse','Veuillez saisir corectement les champs');
                self::redirect('ajouter-professeur');
            }
        }
    }

    public function ajouterModuleProfesseur($id,$modules){
        foreach ($modules as $module) {
            $object = Module::findLang('libelle',$module);
            $sql = "INSERT INTO `".Constantes::TABLE_PROFESSEUR_MODULE."`( `professeur_id`, `module_id`) VALUES (?,?)";
            Model::prepareUpdate($sql,[$id,$object->id]);
        }
        
    }

    public function ajouterClasseProfesseur($id,$classes){
        foreach ($classes as $classe) {
            $object = Classe::findLang('libelle',$classe);
            $sql = "INSERT INTO `".Constantes::TABLE_PROFESSEUR_CLASSE."`( `professeur_id`, `classe_id`) VALUES (?,?)";
            Model::prepareUpdate($sql,[$id,$object->id]);
        }
    }

    public function listerProfesseur(){
        if ($this->request->isGet()) {
            $professeurs = Professeur::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'professeur','lister.professeur.html.php',$professeurs);
        }
    }

    public function listerModuleProfesseur(){
        
    }

    public function listerClasseProfesseur(){
        if ($this->request->isPost()) {
            $id = $_POST['data'][0];
            $professeur = new Professeur();
            $professeur->setId($id);
            $classes = $professeur->classes();
            $modules = $professeur->modules();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'professeur','details.professeur.html.php',array($_POST['data'],$classes,$modules));
        }
    }
}