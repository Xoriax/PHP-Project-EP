<?php

class Database
{
    private $host = "51.158.59.186:14301";
    private $username = "phppex";
    private $password = "Supermotdepasse!42";
    private $database = "LcsTe";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $this->conn->connect_error);
        }
    }
}

?>