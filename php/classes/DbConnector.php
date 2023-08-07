<?php

namespace classes;
use PDOException;
use PDO;

class DbConnector{

private $host = "localhost";
private $dbname = "bidwiz";
private $dbuser = "testUser";
private $dbpsw = "testUser";

public function getConnection(){
    $dsn = "mysql:host=$this->host;db_name=$this->dbname";
    try{

        $con = new PDO($dsn,$this->dbuser,$this->dbpsw);
        return $con;

    }catch(PDOException $e){
        die("error:".$e->getMessage());
    }
}

}