<?php 
namespace App\controllers;

use App\models\Classe;
use App\core\Constantes;
use App\models\Etudiant;
use App\models\Inscription;

class InscriptionController extends RequestController {
    
    public function inscrireEtudiant(){
        if ($this->request->isGet()) {
            $classes = Classe::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'inscription','inscrire.etudiant.html.php',$classes);
        }

        if ($this->request->isPost()) {

            if (!empty($_POST['login']) && !empty($_POST['nomComplet']) && !empty($_POST['classe']) && !empty($_POST['sexe'])) {
                Inscription::newInscription($_POST);
                $this->session->setSession('succesInscription','Inscription Reussie .');
                self::redirect('inscrire-etudiant');
            } else {
                $this->session->setSession('errorInscription','Error Inscription .');
                self::redirect('inscrire-etudiant');
            }

        }
    }

    public function listerInscription() {
        if ($this->request->isGet()) {
            $etudiant = new Etudiant();
            $data = $this->session->getSession(Constantes::USER_KEY);
            $etudiant->setId($data->id);
            $inscriptions = $etudiant->inscriptions();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'inscription','lister.inscription.html.php',$inscriptions);
        }
    }
}