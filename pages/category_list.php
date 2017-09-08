<div class="jumbotron">
    <div class="container">
        <h1>Categories</h1>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Start main column -->
        <div class="col-md-9">
            <!-- Categories -->
            <?php
            $categories = $data_blog['categories'];

            foreach ($categories as $category) {
                renderCategoryThumb($category);
            }
            ?>
        </div>
        <!-- End main column  -->

        <?php include 'includes/sidebar.php'; ?>

    </div>
</div>
