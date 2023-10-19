<?php

//NOTE - my verification between the model and view

$title = $_POST['title'];
$desc = $_POST['desc'];
$status = $_POST['status'];

if (isset($_POST['submit']) && $title != "" && $desc != "" && $status != "") {

    include '../classes/data.contr.classes.php';

    $crud = new DataContr();

    $crud->insert($title, $desc, $status);

    header('location: ../../list.php');
} else {
    header('location: ../views/form.php?error=none');
}



?>