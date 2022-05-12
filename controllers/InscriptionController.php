<?php 
namespace App\controllers;

class InscriptionController extends RequestController {
    
    public function inscrireEtudiant(){
        if ($this->request->isGet()) {
            die("get");
        }

        if ($this->request->isPost()) {
            die("post");
        }
    }
}