<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

    include '../controller/data.contr.class.php';
    $allData = new DataContr();
    $stmt = $allData->select();

?>
<main class="container d-flex justify-content-center mt-5">

  <form class="row g-3 bg-light p-4 mt-3 w-50 rounded shadow" action="../includes/data.inc.php" height="50vh" id="save"
    method="post">
    <h3>To do List</h3>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="desc" placeholder="type..." aria-label="Recipient's username"
        aria-describedby="basic-addon2">
      <button class="input-group-text btn saveBtn" id="basic-addon2" type="submit" name="submit"
        style="background-color: #9C86FF;"><i class="bi bi-plus-lg text-white"></i></button>
    </div>
  </form>
</main>

 <main class="container d-flex justify-content-center mt-5">
  <table class="table table-responsive borderless w-50">
    <tbody>
      <?php foreach ((array)$stmt as $row): ?>
      <tr>
        <form action="../includes/data.inc.php" method="POST" class="p-4">
          <td><img
              src="https://i.pinimg.com/originals/4c/16/0b/4c160b333f46cd589fc9ba9663b3f8a5.jpg"
              alt=""
              style="width: 40px; height: 40px"
              class="rounded-circle"
              /></td>
          <td><?= htmlspecialchars($row['description']) ?></td>
          <td>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="delete" class="btn btn-sm float-end" style="background-color: #9C86FF;"><i class="bi bi-trash text-white"></i></button>
            <button type="submit" name="edit" class="btn btn-sm float-end" style="background-color: #9C86FF;"><i class="bi bi-pencil-square text-white"></i></button>

        </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</main> 

  


<?php $body->footer(); ?>