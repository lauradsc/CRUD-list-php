<?php
//NOTE - my verification between the model and view
include '../controller/data.contr.class.php';

$crud = new DataContr();

if (isset($_POST['submit']))
{
    $description = $_POST['desc'];

    if ($description != "")
    {
        $crud->insert($description);
        header('location: ../views/list.php');
    }
}

if (isset($_GET['id']) != null)
{
    $taskId = $_GET['id'];

    $crud->delete($taskId);
    header('location: ../views/list.php');

}

if (isset($_POST['edit']))
{
  if (isset($_POST['newDescription']))
    {

        $newDescription = $_POST['newDescription'];
        $taskId = $_POST['edit'];

        $crud->edit($newDescription, $taskId);
        header('location: ../views/list.php');

    }
}

