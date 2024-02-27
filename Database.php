<?php

class Database {

    private $pdo;

        //savienojamies ar datu bazi tikai vienreiz
    public function __construct()
    {
        $connection_string = "mysql:host=localhost;dbname=blog_railijs;user=root;password=;charset=utf8mb4";
        $this->pdo = new PDO($connection_string);
        $this->pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    }

            // execute vai query
    public function execute($query_string) {
       
            // 1. sagatavo sql izpildei
        $query = $this->pdo -> prepare($query_string);
            // 2. izpildit sql
        $query -> execute();
            // 3. Atgriezt rezultatu
        return $query;
    }
}