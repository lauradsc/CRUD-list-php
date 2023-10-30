<?php
//NOTE - my verification between the model and view
include '../controller/data.contr.class.php';

$crud = new DataContr();

$description = $_POST['desc'];


if (isset($_POST['submit']) && $description != "")
{
    $crud->insert($description);
    $correctMsg = "success";
    header('location: ../views/list.php'. urlencode($correctMsg));
} 
else {

echo "error";

  header('location: ../views/list.php');

die();
}


if (isset($_GET['id']) != null)
{
    $taskId = $_GET['id'];

    $crud->delete($taskId);
    header('location: ../views/list.php');
}
else {

    echo "error";
    
      header('location: ../views/list.php');
    
      die();
    }
    

if(isset($_POST['edit'])) {
    
    if(isset($_POST['newDescription'])) {

        $newDescription = $_POST['newDescription'];
        $taskId = $_POST['edit'];

        $crud->edit($newDescription, $taskId);
        header('location: ../views/list.php');
        
    } else {

        echo "error";
        
          header('location: ../views/list.php');

          die();
        
        
        }
        

}

