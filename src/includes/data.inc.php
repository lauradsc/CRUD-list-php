<?php

//NOTE - my verification between the model and view




if (isset($_POST['submit']) && $desc != "") {

    include '../controller/data.contr.class.php';

    $desc = $_POST['desc'];

    $crud = new DataContr();

    $crud->insert($desc);

    header('location: ../views/list.php');
} else {
     header('location: ../views/form.php?error=none');
}

if(isset($_POST['delete'])) {
    include '../controller/data.contr.class.php';

    $id = $_GET['id'];
    $crud = new DataContr();

    $crud->delete($id);
}

else {
    header('location: ../views/list.php');
}

  
var_dump($_GET['id']);
echo $id;


?>