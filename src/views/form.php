<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();

?>

<!-- //NOTE - the interface -->
<main class="container d-flex justify-content-center mt-5">
    <section>
        <a href="list.php"><button type="submit" class="btn btn-outline-light">Back</button></a>
    </section>

    <form class="row g-3 bg-light p-4 mt-3 w-50 rounded shadow" action="../includes/data.inc.php" id="save"
        method="post">
        <h3>Adicione sua nota</h3>
        <div class="col-md-12 mt-3">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-12 mt-3">
            <div class="form-floating">
                <textarea class="form-control" name="desc" placeholder="Leave your description here"
                    id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
        </div>
        <div class="col-12">
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
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 mb-3 mt-3" name="submit">Save</button>
        </div>
    </form>
</main>
<?php $body->footer(); ?>