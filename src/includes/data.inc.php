<?php
//NOTE - my verification between the model and view
include '../controller/data.contr.class.php';

$crud = new DataContr();

$description = $_POST['desc'];
$newDescription = $_POST['newDescription'];

if (isset($_POST['submit']) && $description != "")
{
    $crud->insert($description);
    header('location: ../views/list.php');
}

if (isset($_GET['id']) != null)
{
    $id = $_GET['id'];

    $crud->delete($id);
    header('location: ../views/list.php');
}

if(isset($_POST['edit']) && $newDescription != null) {
    
    $crud->edit($newDescription);
    header('location: ../views/list.php');

}

