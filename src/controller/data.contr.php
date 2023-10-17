<?php 

   //NOTE - my conversation between the model and view
      include './../model/config/conn.php';
      
       if(isset($_POST['submit'])) {

        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $status = $_POST['status'];

        $crud = new Conn();

        $crud->insert($title, $desc, $status);

        header('location: ../../index.php');

    }

?>