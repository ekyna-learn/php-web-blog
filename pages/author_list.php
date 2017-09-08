<div class="jumbotron">
    <div class="container">
        <h1>Auteurs</h1>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Start main column -->
        <div class="col-md-9">
            <!-- Authors -->
            <?php
            $authors = $data_blog['authors'];

            foreach ($authors as $author) {
                renderAuthorThumb($author);
            }
            ?>
        </div>
        <!-- End main column  -->

        <?php include 'includes/sidebar.php'; ?>

    </div>
</div>
