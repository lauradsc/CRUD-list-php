<?php 

    require __DIR__ .'/vendor/autoload.php';
    include __DIR__. '/includes/body.php';

    $body = new Body();
    $body->header();
    $body->footer();
?>