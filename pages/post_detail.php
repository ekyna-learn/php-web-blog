<div class="jumbotron" style="background-image: url(<?= $post['image'] ?>)">
    <div class="container">
        <h1><?= $post['title'] ?></h1>
        <p>
            <?= summary($post['content']) ?>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Start main column -->
        <div class="col-md-9">
            <?= $post['content'] ?>
        </div>
        <!-- End main column  -->

        <?php include 'includes/sidebar.php'; ?>

    </div>
</div>
