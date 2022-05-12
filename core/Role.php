<?php
namespace App\core;

class Role {

    private string $role;

    public function __construct(string $pRole)
    {
        $this->role = $pRole;
    }

    public function isEtudiant() {
        if ($this->role == Constantes::ROLE_ETUDIANT) {
            return true;
        }
    }

    public function isRP() {
        if ($this->role == Constantes::ROLE_RP) {
            return true;
        }
    }

    public function isAC() {
        if ($this->role == Constantes::ROLE_AC) {
            return true;
        }
    }
}