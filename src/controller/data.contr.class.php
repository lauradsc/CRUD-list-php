<?php
//NOTE - my conversation between the model and view
include '../model/conn.class.php';

class DataContr extends Conn
{

    public function insert($description)
    {
        $pdo = $this->connect();

        try
        {
            $stmt = $pdo->prepare("INSERT INTO tasks ( description ) values ( :description)");
            $stmt->bindParam(':description', $description);

            $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo "error" . $e->getMessage();
        }
    }

    public function select()
    {
        $pdo = $this->connect();
        try
        {
            $stmt = $pdo->prepare("SELECT id, description FROM tasks");
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count > 0)
            {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            else
            {
                echo '';
            }
        }

        catch(PDOException $e)
        {
            echo "error" . $e->getMessage();
        }

    }

    public function delete($taskId)
    {
        $pdo = $this->connect();

        try
        {
            $stmt = $pdo->prepare("DELETE FROM tasks where id  = :taskId");
            $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(PDOException $e)
        {
            echo "error" . $e->getMessage();
        }
    }

    public function edit($newDescription, $taskId)
    {
        $pdo = $this->connect();

        try
        {
            $stmt = $pdo->prepare("UPDATE tasks set description = :newDescription where id = :taskId");
            $stmt->bindParam(':newDescription', $newDescription, PDO::PARAM_STR);
            $stmt->bindParam(':taskId', $taskId, PDO::PARAM_INT);

            $stmt->execute();
        }

        catch(PDOException $e)
        {
            echo "error" . $e->getMessage();
        }
    }

}

?>
