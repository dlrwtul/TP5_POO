<?php

namespace App\models;
use App\config\constantes;
abstract class User extends Personne {
    protected string $login;
    protected string $password;
    
    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public static function findAll():array
    {
        $sql = "select * from '".self::$table."' where role not like ".constantes::ROLE_PROFESSEUR;
        return [];
    }
}