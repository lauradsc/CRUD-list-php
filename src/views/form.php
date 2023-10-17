<?php 
    include '../assets/components/body.php';
    $body = new Body();
    $body->header();
?>

<!-- //NOTE - the interface -->
<main class="container">
    <section>
        <a href="list.php"><button type="submit" class="btn btn-outline-light">Back</button></a>
    </section>

    <form class="row g-3 bg-light p-4 mt-3 w-50" action="../controller/data.contr.php" id="save" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <div class="form-floating">
            <textarea class="form-control" name="desc" placeholder="Leave your description here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
            </div>  
        </div>
        <div class="col-12">
            <div class="form-check form-check-inline">
                <label for="">
                   <input type="radio" name="status" id="" value="urgent" checked> Urgente
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label for="">
                   <input type="radio" name="status" id="" value="normal"> Normal
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </div>
    </form>
</main>
<?php $body->footer(); ?>
