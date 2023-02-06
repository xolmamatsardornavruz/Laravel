<?php

//(Database): classi.
class Database
{
    public $servername;
    public $database;
    public $username;
    public $password;
    
// Construct metodi:
    public function __construct($servername, $database, $username, $password)
    {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }
    
// Connect metodi: 
    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}