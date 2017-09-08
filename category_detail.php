<?php

include 'data/data.php';
include 'includes/functions.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (null === $category = findCategoryById($id)) {
    error404();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/navbar.php'; ?>

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
                $categoryPosts = finPostsByCategoryId($id);

                foreach ($categoryPosts as $post) {
                    renderPostThumb($post);
                }
                ?>
            </div>
            <!-- End main column  -->

            <?php include 'includes/sidebar.php'; ?>

        </div>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
