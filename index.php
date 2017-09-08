<?php

include 'data/data.php';
include 'includes/functions.php';


/*
Config APACHE (virtual host) :

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/blog"
    ServerName blog.dev

    <Directory "/">
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule . index.php [L]
    </Directory>
</VirtualHost>
*/


$components = parse_url($_SERVER['REQUEST_URI']);
$path = trim($components['path'], '/');
$parts = explode('/', $path);

switch ($parts[0]) {
    case '' :
        $view = 'pages/home.php';
        break;

    case 'categories':
        if (isset($parts[1])) {
            $slug = $parts[1];
            if (null === $category = findCategoryBySlug($slug)) {
                error404();
            }
            $view = 'pages/category_detail.php';
            break;
        }

        $view = 'pages/category_list.php';
        break;

    case 'authors':
        if (isset($parts[1])) {
            $slug = $parts[1];
            if (null === $author = findAuthorBySlug($slug)) {
                error404();
            }
            $view = 'pages/author_detail.php';
            break;
        }

        $view = 'pages/author_list.php';
        break;

    case 'posts':
        if (!isset($parts[1])) {
            error404();
        }

        $slug = $parts[1];
        if (null === $post = findPostBySlug($slug)) {
            error404();
        }

        $view = 'pages/post_detail.php';
        break;

    default:
        error404();
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php
    include 'includes/navbar.php';

    include $view;

    include 'includes/scripts.php';
    ?>

</body>
</html>
