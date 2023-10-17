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

        public function insert($title, $desc, $status) {
            $pdo = $this->connect();

            try {
                $stmt = $pdo->prepare("INSERT INTO tasks (title, description, status) values (:title, :description, :status)");
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description', $desc);
                $stmt->bindParam(':status', $status);

                $stmt->execute();
            }
            catch (PDOException $e) {
                echo "error".$e->getMessage();
            }

        }
    }

?>