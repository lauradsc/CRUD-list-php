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
    <h3>Todo List</h3>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="desc" placeholder="Leave your description here" aria-label="Recipient's username"
        aria-describedby="basic-addon2">
      <button class="input-group-text btn btn-primary " id="basic-addon2" type="submit"  name="submit">Save</button>
    </div>
    <!-- <div class="col-12">
            <div class="form-check form-check-inline">
                <label for="">
                    <input type="radio" name="status" id="" value="urgent" class="mt-2" checked> Urgente
                </label>
            </div>
            <div class="form-check form-check-inline mt-3">
                <label for="">
                    <input type="radio" name="status" id="" value="normal"> Normal
                </label>
            </div>
        </div> -->
  </form>
</main>

<main class="container d-flex justify-content-center mt-5">
  <table class="table table-responsive borderless w-50">
    <tbody>
      <?php foreach ((array)$stmt as $row): ?>
      <tr>
        <td><input class="form-check" type="checkbox" value="" id="flexCheckDefault"></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <form action="../includes/data.inc.php" method="POST">
        <td>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" name="delete" class="btn btn-outline-danger btn-sm float-end">
        </form>
        </td>
        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

</main>

<?php $body->footer(); ?>