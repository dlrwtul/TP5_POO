<?php 
namespace App\controllers;

use App\models\User;
use App\core\Constantes;
use App\core\NotFoundException;
use App\core\Role;
use Nette\Utils\Validators;

class SecurityController extends RequestController {
    
    public function connexion(){
        if ($this->request->isGet()) {
            self::render('accueil.html.php','securite','login.html.php');
        }

        if ($this->request->isPost()) {
            if (Validators::isEmail($_POST['login'])) {
                $result = User::findUser($_POST['login'],$_POST['password']);
                if ($result == NULL) {
                    $this->session->setSession('errorLogin','Login ou password incorrect.');
                    self::redirect('login');
                } else {
                    $this->session->setSession(Constantes::USER_KEY,$result);
                    if (Role::isConnected()) {
                        self::render('accueil.user.html.php','user','first.view.html.php');
                    } else {
                        $exception = new NotFoundException();
                        die($exception->message);
                    }
                }
            }else {
                $this->session->setSession('errorLogin','Login invalid.');
                self::redirect('login');
            }
            
        }
    }

    public function deconnexion(){
        if ($this->request->isGet()) {
            session_destroy();
            $this->session->unsetSession(Constantes::USER_KEY);
            self::redirect('login');
            exit();
        }
    }

    public function inscription(){
        if ($this->request->isGet()) {
            self::render('accueil.html.php','securite','signin.html.php');
        }

        if ($this->request->isPost()) {
            $result = User::checkUser($_POST['login']);
            if ($result == NULL) {
                $this->session->setSession('errorSignin','Login deja existant !');
                self::redirect('signin');
            } else {
                //il reste le matricule
                //$newEtudiant = Etudiant::newUser($_POST);
                $this->session->setSession('succesSignin','Inscription reussie !');
                self::redirect('signin');
            }
        }
    }
}