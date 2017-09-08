<div class="jumbotron">
    <div class="container">
        <h1><?= authorFullName($author) ?></h1>
        <?= $author['bio'] ?>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Start main column -->
        <div class="col-md-9">
            <!-- Post list for this author -->
            <?php
            $authorPosts = finPostsByAuthorId($author['id']);

            foreach ($authorPosts as $post) {
                renderPostThumb($post);
            }
            ?>
        </div>
        <!-- End main column  -->

        <?php include 'includes/sidebar.php'; ?>

    </div>
</div>
