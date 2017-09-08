<?php

include 'data/data.php';
include 'includes/functions.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (null === $post = findPostById($id)) {
    error404();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/navbar.php'; ?>

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

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
