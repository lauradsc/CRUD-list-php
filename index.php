<?php 

    require __DIR__ .'/vendor/autoload.php';
    include __DIR__. '/components/body.php';

    $body = new Body();
    $body->header();
?>


<?php $body->footer(); ?>