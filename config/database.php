<?php 
    class Database {
        private $host = "remotemysql.com";
        private $database_name = "LXw2XLMiFG";
        private $username = "LXw2XLMiFG";
        private $password = "BhfQWYIST6";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>