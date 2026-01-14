<?php

class Database{

    private $pdo;

    public function __construct(){

        $config = [
            "host" => "localhost",
            "port" => "8889",
            "user" => "root",
            "password" => "root",
            "dbname" => "users_ipb24",
            "charset" => "utf8mb4"
        ];
        $dsn = "mysql:" . http_build_query($config, arg_separator: ";");
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }

    public function query($sql){

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement;

    }
}

?>