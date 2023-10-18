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
    <tr>
      <th scope="row"><img src="https://i.pinimg.com/originals/07/33/ba/0733ba760b29378474dea0fdbcb97107.png" class="rounded-circle" width=" 40px;" height=" 40px;"></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

</main>

<?php $body->footer(); ?>