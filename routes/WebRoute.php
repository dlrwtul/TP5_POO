<?php

namespace App\routes;
use App\core\Router;
use App\core\NotFoundException;
use App\controllers\ClasseController;
use App\controllers\ModuleController;
use App\controllers\DemandeController;
use App\controllers\SecurityController;
use App\controllers\ProfesseurController;
use App\controllers\InscriptionController;

class WebRoute {

    public function webRouter()
    {
        $router = new Router();
        $router->route("login",[SecurityController::class,'connexion']);
        $router->route("logout",[SecurityController::class,'deconnexion']);
        $router->route("home",[SecurityController::class,'home']);
        $router->route("signin",[SecurityController::class,'inscription']);
        $router->route("creer-classe",[ClasseController::class,'creerClasse']);
        $router->route("lister-classe",[ClasseController::class,'listerClasse']);
        $router->route("supprimer-classe",[ClasseController::class,'supprimerClasse']);
        $router->route("formuler-demande",[DemandeController::class,'formulerDemande']);
        $router->route("lister-demande",[DemandeController::class,'listerDemande']);
        $router->route("traiter-demande",[DemandeController::class,'traiterDemande']);
        $router->route("lister-module",[ModuleController::class,'listerModule']);
        $router->route("lister-profs-module",[ModuleController::class,'listerProfsModule']);
        $router->route("ajouter-professeur",[ProfesseurController::class,'ajouterProfesseur']);
        $router->route("ajouter-module-professeur",[ProfesseurController::class,'ajouterModuleProfesseur']);
        $router->route("ajouter-classe-professeur",[ProfesseurController::class,'ajouterClasseProfesseur']);
        $router->route("lister-professeur",[ProfesseurController::class,'listerProfesseur']);
        $router->route("lister-module-professeur",[ProfesseurController::class,'listerModuleProfesseur']);
        $router->route("lister-classe-professeur",[ProfesseurController::class,'listerClasseProfesseur']);
        $router->route("inscrire-etudiant",[InscriptionController::class,'inscrireEtudiant']);
        $router->route("lister-inscription",[InscriptionController::class,'listerInscription']);

        try {
            $router->resolve();
        } catch (NotFoundException $error) {
            echo $error->messageError;
        }
    }
}
