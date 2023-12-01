<?php
namespace classes;
use PDOException;
use PDO;

class DbConnector {
    private $host = "localhost";
    private $dbname = "bidwiz";
    private $dbuser = "testuser";
    private $dbpsw = "testuser";

    public function getConnection() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname"; // Fix the DSN here
        try {
            $con = new PDO($dsn, $this->dbuser, $this->dbpsw);
            return $con;
        } catch(PDOException $e) {
            die("error:" . $e->getMessage());
        }
    }


}