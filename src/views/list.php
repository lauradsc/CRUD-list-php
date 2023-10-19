<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();
?>

<main class="container">
<table class="table table-responsive border">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    
  </thead>
  <tbody>
  <?php foreach ($select as $value) : ?>
      <tr>
      <td scope="col"><?php htmlspecialchars($value['title']) ?></td>
      <td scope="col"><?php htmlspecialchars($value['description']) ?></td>
      <td scope="col"><?php htmlspecialchars($value['status']) ?></td>
    </tr> 
    <?php endforeach; ?>
  </tbody>
</table>

</main>

<?php $body->footer(); ?>