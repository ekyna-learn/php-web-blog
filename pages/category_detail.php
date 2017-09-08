<div class="jumbotron">
    <div class="container">
        <h1><?= $category['title'] ?></h1>
        <?= $category['description'] ?>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Start main column -->
        <div class="col-md-9">
            <!-- Post list for this category -->
            <?php
            $categoryPosts = findPostsByCategoryId($category['id']);

            foreach ($categoryPosts as $post) {
                renderPostThumb($post);
            }
            ?>
        </div>
        <!-- End main column  -->

        <?php include 'includes/sidebar.php'; ?>

    </div>
</div>
