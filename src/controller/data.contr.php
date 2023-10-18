<?php 

   //NOTE - my conversation between the model and view
      include './../model/config/conn.php';
      
       class DataContr extends Conn {
        public function insert($title, $desc, $status) {
            $pdo = $this->connect();

            try {
                $stmt = $pdo->prepare("INSERT INTO tasks (title, description, status) values (:title, :description, :status)");
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description', $desc);
                $stmt->bindParam(':status', $status);

                $stmt->execute();

                if(!$stmt->execute((array($title, $desc, $status)))) {
                    $error = $stmt->errorInfo();
                    $stmt = null;

                    header('location: ../views/form.php?stmtfailed&message='.urlencode($error[2]));
                    exit();
                }
            }
            catch (PDOException $e) {
                echo "error".$e->getMessage();
            }
       }
    }
?>