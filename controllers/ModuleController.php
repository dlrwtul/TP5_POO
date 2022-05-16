<?php 
namespace App\controllers;

class ModuleController extends RequestController {
    
    public function listerModule(){
        if ($this->request->isGet()) {
            self::render('accueil.user.html.php','user','lister.module.html.php');
        }
    }

    public function listerProfsModule(){
        
    }
}