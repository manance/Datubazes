<?php

class Database{

    private $pdo;

    public function __construct(){

        $dsn = "";
        $this->pdo = new PDO($dsn);

    }

    public function query($sql){

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement;

    }
}

?>