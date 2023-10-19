<?php 
    include 'includes/autoload.php';
    include './src/assets/components/body.php';
    $body = new Body();
    $body->header();
?>

<body>
    <?php 
        $select = new DataContr();
        $results = $select->oi();
    ?>

    
    <p><?php echo $results ?> </p>
</body>

<?php $body->footer(); ?>