<?php 
    class Conn {
        private $host = "localhost";  
        private $user = "root";
        private $pwd = "";

        private $dbname = "tasks";

        public function connect() {
            try {
                $infos = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
                $pdo = new PDO($infos, $this->user, $this->pwd);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }
            catch (PDOException $e) { 
                echo "Internal error". $e->getMessage();
                die();
            }
        }






    
    
    }

?>