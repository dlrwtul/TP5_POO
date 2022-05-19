<?php 
namespace App\controllers;

use App\models\Classe;
use App\core\Constantes;
use Nette\Utils\Validators;
use App\controllers\RequestController;
use ReflectionClass;

class ClasseController extends RequestController {

    public function creerClasse(){
        if ($this->request->isGet()) {
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'classe','creer.classe.html.php');
        }

        if ($this->request->isPost()) {
            if (!empty($_POST['libelle']) && !empty($_POST['niveau']) && !empty($_POST['filiere'])) {
                if (Classe::findLang("libelle", $_POST['libelle']) == null) {
                    $lastInsertId = Classe::insertNewObj($_POST);
                    $this->session->setSession('succesCreateClasse','Nouvelle Classe ajoutée .');
                    self::redirect('creer-classe');
                } else {
                    $this->session->setSession('errorCreateClasse','Classe deja existante .');
                    self::redirect('creer-classe');                
                }
                
            } else {
                $this->session->setSession('errorCreateClasse','Veuillez saisir corectement les champs');
                self::redirect('creer-classe');
            }
            
        }
    }

    public function listerClasse(){
        if ($this->request->isGet()) {
            $classes = Classe::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'classe','lister.classe.html.php',$classes);
        }
    }

    public function supprimerClasse(){
        if ($this->request->isPost()) {
            Classe::delete($_POST['data'][0]);
            self::redirect('lister-classe');
        }
    }
}