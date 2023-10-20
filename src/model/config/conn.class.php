<?php 
   
   //NOTE - my database configuration
    class Conn {

        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $dbname = "taskslist";

        public function connect() {
            try {
                $infos = "mysql:host={$this->server};dbname={$this->dbname};charset=utf8";
                $pdo = new PDO($infos, $this->user, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;

            } catch (PDOException $e) {
                echo "Internal error in database". $e->getMessage();
                die();
            }
        }

    }

?>