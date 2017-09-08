<?php

include 'data/data.php';
include 'includes/functions.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (null === $author = findAuthorById($id)) {
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
                $authorPosts = finPostsByAuthorId($id);

                foreach ($authorPosts as $post) {
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
