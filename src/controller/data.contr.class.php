<?php 

   //NOTE - my conversation between the model and view
      include '../model/config/conn.class.php';
      
       class DataContr extends Conn {

        
        public function insert($desc) {
            $pdo = $this->connect();

            try {
                $stmt = $pdo->prepare("INSERT INTO tasks ( description ) values ( :description)");
                $stmt->bindParam(':description', $desc);

                $stmt->execute();

                if(!$stmt->execute((array($desc)))) {
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

       public function select() {
            $pdo = $this->connect();
            try {
                $stmt = $pdo->prepare("SELECT description FROM tasks");
                $stmt->execute();
                $count = $stmt->rowCount();

                if($count > 0) {
                   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   return $results;
                }
                else {
                    echo '';
                }
            }

            catch (PDOException $e) {
                echo "error".$e->getMessage();
            }

        }

        public function delete($id) {
            $pdo = $this->connect();

            try {
                $stmt = $pdo->prepare("DELETE FROM tasks where id  = :id");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();


            }
            
            catch (PDOException $e) {
                echo "error".$e->getMessage();
            }
        }

    }

    
?>