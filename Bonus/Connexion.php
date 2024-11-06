<?php
class Connexion {
    private $conn;

    public function getConn() {
        if ($this->conn === null) {
            try {
                $connString = "mysql:host=127.0.0.1;dbname=streamiing;port=3306;charset=utf8";
                
                $this->conn = new PDO($connString, "root", "");
            } catch (PDOException $e) {
                die("Erreur : " . $e->getMessage());
            }
        }

        return $this->conn;
    }
}
