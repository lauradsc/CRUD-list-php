<?php

//NOTE - my verification between the model and view


$desc = $_POST['desc'];


if (isset($_POST['submit']) && $desc != "") {

    include '../controller/data.contr.class.php';

    $crud = new DataContr();

    $crud->insert($desc);

    header('location: ../views/list.php');
} else {
    header('location: ../views/form.php?error=none');
}

$_GET['id'];

  


?>