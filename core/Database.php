<?php 
namespace App\core;

use PDO;

class Database {
    private \PDO|null $pdo;

    public function connectDB()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=gestion_inscription', 'tp5','tp5');
        } catch (\Exception $th) {
            die($th->message);
        }
       
    }

    public function disconnectDB()
    {
        $this->pdo = null;
    }

    public function executeSelect(string $sql,array $datas = [],bool $single=false):object|array|null
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($datas);
        if ($single) {
            $results = $query->fetch(PDO::FETCH_OBJ);
            if (!$results) {
                return null;
            }
        } else {
            $results = $query->fetchAll(PDO::FETCH_OBJ);
        }

        return $results;
        
    }

    public function executeUpdate(string $sql,array $datas):int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($datas);
        return $this->pdo->lastInsertId();
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * Set the value of pdo
     *
     * @return  self
     */ 
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;

        return $this;
    }
}