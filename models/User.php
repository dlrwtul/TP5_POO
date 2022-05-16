<?php

namespace App\models;
use App\core\Constantes;
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
        $sql = "select * from `".self::getTableName()."` where role not like '".Constantes::ROLE_PROFESSEUR."'";
        return [];
    }

    public static function findUser(string $login,string $password):object|null {
        $sql = "select * from `".self::getTableName()."` where login like ?  and password like ?";
        return self::findBy($sql,[$login,$password],true);
    }

    public static function checkUser(string $login):object|null {
        $sql = "select * from `".self::getTableName()."` where login like ?";
        return self::findBy($sql,[$login],true);
    }

}