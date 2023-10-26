<?php
//NOTE - my verification between the model and view
include '../controller/data.contr.class.php';

$crud = new DataContr();

$description = $_POST['desc'];

if (isset($_POST['submit']) && $description != "")
{
    $crud->insert($description);
    header('location: ../views/list.php');
}
elseif (isset($_POST['id']) != null)
{
    $id = $_POST['id'];

    $crud->delete($id);
    header('location: ../views/list.php');
}
else echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script> 
    alert("error")
</script>';


