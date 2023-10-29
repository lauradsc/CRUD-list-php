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
        <td><img src="https://pbs.twimg.com/profile_images/498283115706847232/SU55Oonq.jpeg" alt=""
            style="width: 40px; height: 40px" class="rounded-circle" /></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td>
          <form action="../includes/data.inc.php" method="GET">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="delete" class="btn btn-sm float-end" style="background-color: #9C86FF;"><i
                class="bi bi-trash text-white"></i></button>
          </form>

          <button type="submit" class="btn btn-sm float-end  mr-2" data-bs-toggle="modal" data-bs-target="#modal_<?= $row['id'] ?>"
            style="background-color: #9C86FF;"><i class="bi bi-pencil-square text-white"></i></button>

            <div class="modal fade" id="modal_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="../includes/data.inc.php" method="POST">
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" name="newDescription" placeholder="edit your task..."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                        
                      <button class="input-group-text btn text-white" id="basic-addon2" type="submit"
                        name="edit" style="background-color: #9C86FF;"  value="<?= $row['id'] ?>">edit</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</main>

<!-- <script>
  $(document).on('click', 'editTaskbtn', function() {

    let task_id = $(this).val();

    $.ajax({
      type: "GET",
      url: "../includes/data.inc.php",
      data: "data",
      dataType: "dataType",
      success: function (response) {
        let resp = $.parseJSON(response);

        if(res.status == 404) {
          alert("error");
        }
        else if(res.status == 200) {
          $('#id').val(res.data.id);
          $('#newDescription').val(res.data.newDescription);

          $('#modaledit').modal('show');
        }
      }
    });
  })
</script> -->



<?php $body->footer(); ?>