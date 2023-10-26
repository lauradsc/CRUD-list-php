<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

    include '../controller/data.contr.class.php';
    $allData = new DataContr();
    $stmt = $allData->select();

?>

<main class="container">
<table class="table table-responsive border">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
    
  </thead>
  <tbody>
  <?php foreach ($stmt as $row): ?>
    <tr>
      <td><?= $row['title'] ?></td>
      <td><?= $row['description'] ?></td>
      <td><?= $row['status'] ?></td>
    </tr>
  <?php endforeach; ?>

  </tbody>
</table>

</main>

<?php $body->footer(); ?>