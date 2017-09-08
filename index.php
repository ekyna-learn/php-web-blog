<?php

include 'data/data.php';
include 'includes/functions.php';

?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/navbar.php'; ?>

    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut turpis eget mauris venenatis elementum.
            </p>
            <p>
                Duis luctus, nulla ac ultrices hendrerit, sapien mi bibendum nisl, quis luctus turpis eros ut lorem. Aliquam
                erat volutpat. Nulla tempus mauris a facilisis finibus.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- Start main column -->
            <div class="col-md-9">
                <?php
                $posts = array_slice($data_blog['posts'], 0, 5);
                foreach ($posts as $post) {
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
