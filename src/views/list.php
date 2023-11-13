<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

    include '../controller/data.contr.class.php';
    $allData = new DataContr();
    $stmt = $allData->select();
?>

<main class="container d-flex justify-content-center mt-5">
    <form class="row g-3 bg-white p-4 mt-3 w-50 rounded shadow" action="../includes/data.inc.php" height="50vh" id="save" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="desc" placeholder="Task to be done..." aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <button class="input-group-text btn saveBtn" id="basic-addon2" type="submit" name="submit" style="background-color: #9C86FF;"><i class="bi bi-plus-lg text-white"></i></button>
        </div>
    </form>
</main>

<div class="container d-flex justify-content-center mt-5 h2" style="cursor: pointer" id="flip">My list</div>
<main class="container d-flex justify-content-center mt-5">
    <div class="w-50 shadow rounded bg-white p-2">
        <table class="table table-responsive bg-none mt-3 p-4" id="table">
            <tbody>
                
                <?php foreach ((array)$stmt as $row): ?>
                <tr>
                    <td><p class="td" onclick="checkChange()" style="cursor: pointer"><?= htmlspecialchars($row['description']) ?></p></td>
                    <td>
                        <form action="../includes/data.inc.php" method="GET" class="">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" name="delete" class="btn btn-sm float-end" style="background-color: #9C86FF;"><i class="bi bi-trash text-white"></i></button>
                        </form>

                        <div class=""> 
                            <button type="submit" class="btn btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal_<?= htmlspecialchars($row['id']) ?>" style="background-color: #9C86FF;"><i class="bi bi-pencil-square text-white"></i></button>
                        </div>

                        <div class="modal fade" id="modal_<?= htmlspecialchars($row['id']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your task</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../includes/data.inc.php" method="POST">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="newDescription" placeholder="edit your task..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <button class="input-group-text btn text-white" id="basic-addon2" type="submit" name="edit" style="background-color: #9C86FF;" value="<?= htmlspecialchars($row['id']) ?>">edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<script>

</script>

<?php $body->footer(); ?>
