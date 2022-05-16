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

    public static function isConnected() {
        return isset($_SESSION[Constantes::USER_KEY]);
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}