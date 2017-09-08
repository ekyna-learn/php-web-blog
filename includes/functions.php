<?php

// ============================================= TROUVER LES DONNÉES ===================================================

// Renvoi la catégorie correspondante à l'identifiant $id
// ou NULL si pas de résultat
function findCategoryById($id) {
    global $data_blog;

    if (isset($data_blog['categories'][$id])) {
        return $data_blog['categories'][$id];
    }

    return null;
}

// Renvoi l'auteur correspondant à l'identifiant $id
// ou NULL si pas de résultat
function findAuthorById($id) {
    global $data_blog;

    if (isset($data_blog['authors'][$id])) {
        return $data_blog['authors'][$id];
    }

    return null;
}

// Renvoi l'article correspondant à l'identifiant $id
// ou NULL si pas de résultat
function findPostById($id) {
    global $data_blog;

    if (isset($data_blog['posts'][$id])) {
        return $data_blog['posts'][$id];
    }

    return null;
}

// Renvoi la liste (tableau) des articles de la catégorie $categoryId
function finPostsByCategoryId($categoryId) {
    global $data_blog;

    $allPosts = $data_blog['posts'];

    $categoryPosts = [];

    foreach ($allPosts as $post) {
        if ($post['category'] == $categoryId) {
            $categoryPosts[] = $post;
        }
    }

    return $categoryPosts;
}

// Renvoi la liste (tableau) des articles de l'auteur $authorId
function finPostsByAuthorId($authorId) {
    global $data_blog;

    $allPosts = $data_blog['posts'];

    $authorPosts = [];

    foreach ($allPosts as $post) {
        if ($post['author'] == $authorId) {
            $authorPosts[] = $post;
        }
    }

    return $authorPosts;
}

// ============================================= AFFICHER LES DONNÉES ==================================================

// Affiche la miniature d'une catégorie
function renderCategoryThumb(array $category) {
?>
    <div class="thumb">
        <h2>
            <a href="<?= getCategoryUrl($category) ?>">
                <?= $category['title'] ?>
            </a>
        </h2>
        <p>
            <?= summary($category['description']) ?>
        </p>
        <p>
            <a href="<?= getCategoryUrl($category) ?>" class="btn btn-sm btn-primary">
                Tous les articles de &laquo;<?= $category['title'] ?>&raquo;
            </a>
        </p>
    </div>
<?php
}

// Renvoi le nom complet d'un auteur
function authorFullName(array $author) {
    return $author['first_name'] . ' ' . $author['last_name'];
}

// Affiche la miniature d'un auteur
function renderAuthorThumb(array $author) {
?>
    <div class="thumb">
        <h2>
            <a href="<?= getAuthorUrl($author) ?>">
                <?= authorFullName($author) ?>
            </a>
        </h2>
        <p>
            <?= summary($author['bio']) ?>
        </p>
        <p>
            <a href="<?= getAuthorUrl($author) ?>" class="btn btn-sm btn-primary">
                Tous les articles de &laquo;<?= authorFullName($author) ?>&raquo;
            </a>
        </p>
    </div>
<?php
}

// Affiche la miniature d'un article (post)
function renderPostThumb(array $post) {
    $author = findAuthorById($post['author']);
    $category = findCategoryById($post['category']);
?>
    <div class="thumb">
        <h2>
            <a href="<?= getPostUrl($post) ?>">
                <?= $post['title'] ?>
            </a>
        </h2>
        <p>
            Le <em><?= $post['date'] ?></em>
            par <strong><?= $author['first_name'] . ' ' . $author['last_name'] ?></strong>
            dans <strong><?= $category['title'] ?></strong>
        </p>
        <p><?= summary($post['content']) ?></p>
        <p>
            <a href="<?= getPostUrl($post) ?>" class="btn btn-sm btn-primary">
                Lire la suite
            </a>
        </p>
    </div>
<?php
}

// ================================================== NAVIGATION =======================================================

// Renvoi l'URL de détail pour la catégory
function getCategoryUrl(array $category) {
    return '/category_detail.php?id=' . $category['id'];
}

// Renvoi l'URL de détail pour l'auteur
function getAuthorUrl(array $author) {
    return '/author_detail.php?id=' . $author['id'];
}

// Renvoi l'URL de détail pour l'article
function getPostUrl(array $post) {
    return '/post_detail.php?id=' . $post['id'];
}

// ================================================== UTILITAIRE =======================================================

// Renvoi le 'résumé' d'une chaine de caractères HTML
function summary($html, $length = 128) {
    // Supprime les balises HTML
    $string = strip_tags($html);

    // Sous chaine de 0 à $length (128 par défaut)
    $string = substr($string, 0, $length) . '&hellip;';

    return $string;
}

// Génére une page d'erreur 404
function error404() {
    http_response_code(404);
    echo 'Page introuvable';
    exit;
}
