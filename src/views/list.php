<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

    include '../controller/data.contr.class.php';
    $allData = new DataContr();
    $stmt = $allData->select();

?>

<main class="container d-flex justify-content-center mt-5">
<table class="table table-responsive borderless w-50">
  <thead>
  <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
    </tr>
    
  </thead>
  <tbody>
  <?php foreach ($stmt as $row): ?>
    <tr>
      <td><?= htmlspecialchars($row['title']) ?></td>
      <td><?= htmlspecialchars($row['description']) ?></td>
      <td><?= htmlspecialchars($row['status']) ?></td>
    </tr>
  <?php endforeach; ?>

  </tbody>
</table>

</main>

<?php $body->footer(); ?>