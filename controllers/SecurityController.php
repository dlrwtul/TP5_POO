<?php 
namespace App\controllers;

use App\models\User;
use App\core\Constantes;
use App\core\Role;
use Collator;

class SecurityController extends RequestController {
    
    public function connexion(){
        if ($this->request->isGet()) {
            self::render('securite','login.html.php');
        }

        if ($this->request->isPost()) {
            $result = User::findUser($_POST['login'],$_POST['password']);
            if ($result == NULL) {
                self::redirect('login');
            } else {
                $role = new Role($result->role);
                if ($role->isRP()) {
                    die("accueil RP");
                }
                if ($role->isAC()) {
                    die("accueil AC");
                }
                if ($role->isEtudiant()) {
                    die("accueil etudiant");
                }
            }
        }
    }

    public function deconnexion(){
        
    }

    public function inscription(){
        if ($this->request->isGet()) {
            self::render('securite','signin.html.php');
        }

        if ($this->request->isPost()) {
            die("post");
        }
    }
}