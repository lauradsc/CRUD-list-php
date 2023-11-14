<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

    include '../controller/data.contr.class.php';
    $allData = new DataContr();
    $stmt = $allData->select();
?>

<main class="container d-flex justify-content-center mt-5">
    <form class="row g-3 bg-white p-4 mt-3 w-50 rounded shadow" action="../includes/data.inc.php" height="50vh"
        id="save" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="desc" placeholder="Task to be done..."
                aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <button class="input-group-text btn bg-primary bg-opacity-75" id="basic-addon2" type="submit"
                name="submit"><i class="bi bi-plus-lg text-white"></i></button>
        </div>
    </form>
</main>


<main class="container d-flex justify-content-center mt-5">
    <div class="w-50 shadow rounded bg-white p-2">
        <table class="table table-responsive bg-none mt-3 p-4" id="table">
            <tbody>

                <?php foreach ((array)$stmt as $row): ?>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input rounded" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </td>
                    <td>
                        <p class="td m-1" onclick="checkChange()" style="cursor: pointer">
                            <?= htmlspecialchars($row['description']) ?></p>
                    </td>
                    <td>
                        <form action="../includes/data.inc.php" method="GET" class="">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" name="delete"
                                class="btn btn-sm float-end m-1 bg-primary bg-opacity-75"><i
                                    class="bi bi-trash text-white"></i></button>
                        </form>

                        <div class="">
                            <button type="submit" class="btn btn-sm float-end m-1 bg-primary bg-opacity-75"
                                data-bs-toggle="modal" data-bs-target="#modal_<?= htmlspecialchars($row['id']) ?>"> <i
                                    class="bi bi-pencil-square text-white"></i></button>
                        </div>

                        <div class="modal fade" id="modal_<?= htmlspecialchars($row['id']) ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your task</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form action="../includes/data.inc.php" method="POST">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="newDescription"
                                                    placeholder="edit your task..." aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2">
                                                <button class="input-group-text btn text-white bg-primary bg-opacity-75"
                                                    id="basic-addon2" type="submit" name="edit"
                                                    value="<?= htmlspecialchars($row['id']) ?>"><i
                                                        class="bi bi-plus-lg text-white"></i></button>
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
    //jquery for slideToggle
    $(document).ready(function () {
        $("#flip").click(function () {
            $("#table").slideToggle(300);

        });
    });


    function checkChange() {
        const p = document.querySelectorAll(".td");

        for (const pp of p) {

            pp.addEventListener("click", (e) => {
                e.preventDefault();
                pp.classList.add("text-decoration-line-through");

            })

        }
    }
</script>

<?php $body->footer(); ?>