<?php 
namespace App\controllers;

class SecurityController extends RequestController {
    
    public function connexion(){
        if ($this->request->isGet()) {
            self::render('securite','login.html.php');
        }

        if ($this->request->isPost()) {
            die("post");
        }
    }

    public function deconnexion(){
        
    }

    public function inscription(){

    }
}