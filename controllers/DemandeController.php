<?php 
namespace App\controllers;

use App\core\Constantes;
use App\models\Demande;

class DemandeController extends RequestController {
    
    public function formulerDemande(){
        if ($this->request->isPost()) {
            if (count($_POST) == 1) {
                $array = $_POST['data'];
                $_SESSION['inscription_id'] = $array[0];
                self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'demande','formuler.demande.html.php');
            } else {
                Demande::insertNewObj($_POST);
                self::redirect('lister-inscription');
            }
        }
    }

    public function listerDemande(){

        if ($this->request->isGet()) {
            $demandes = Demande::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'demande','lister.demande.html.php',$demandes);
        }
    }

    public function traiterDemande(){
        if ($this->request->isPost()) {
            Demande::update('etat',$_POST['data'][1],$_POST['data'][0]);
            self::redirect('lister-demande');
        }
    }
}