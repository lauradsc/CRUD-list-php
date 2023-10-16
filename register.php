<?php 
        require __DIR__ .'/vendor/autoload.php';

        if(isset($_POST['title'], $_POST['desc'], $_POST['u'], $_POST['n'])) {
                echo 'correct';
        }
        
        include __DIR__. '/includes/form.php';
        include __DIR__. '/includes/list.php';
        include __DIR__.'/includes/body.php';
?>