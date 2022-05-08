<?php 

namespace App\models;
use App\config\Constantes;

class RP extends User {

    public function __construct()
    {
        $this->role = Constantes::ROLE_RP;
    }

    public function demandes():array {
        return [];
    }
}