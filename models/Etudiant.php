<?php 
namespace App\models;
use App\config\Constantes;

class Etudiant extends User {
    
    public function __construct()
    {
        $this->role = Constantes::ROLE_ETUDIANT;
    }

    public function demandes():array {
        return [];
    }

    public function inscriptions():array {
        return [];
    }
}