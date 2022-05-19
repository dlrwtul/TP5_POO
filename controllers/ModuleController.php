<?php 
namespace App\controllers;

use App\core\Constantes;
use App\models\Module;

class ModuleController extends RequestController {
    
    public function listerModule(){
        if ($this->request->isGet()) {
            $modules = Module::findAll();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'module','lister.module.html.php',$modules);
        }
    }

    public function listerProfsModule(){
        if ($this->request->isPost()) {
            $id = $_POST['data'][0];
            $module = new Module();
            $module->setId($id);
            $professeurs = $module->professeurs();
            self::render('accueil.user.html.php','user'.DIRECTORY_SEPARATOR.'module','details.module.html.php',array($_POST['data'],$professeurs));
        }
    }
}