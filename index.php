<?php

/*$components = parse_url($_SERVER['REQUEST_URI']);
$parts = explode('/', trim($components['path'], '/'));

switch ($parts[0]) {
    case '':
        echo 'Page d\'accueil.';
        break;

    case 'categories':
        if (isset($parts[1])) {
            echo 'Détail catégorie';
            break;
        }

        echo 'Liste des catégories';
        break;

    case 'authors':
        if (isset($parts[1])) {
            echo 'Détail auteur';
            break;
        }

        echo 'Liste des auteurs.';
        break;

    default:
        http_response_code(404);
        echo 'Page not found !';
        exit;
}*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog.dev</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Blog.dev</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/category_list.php">Catégories</a></li>
                    <li><a href="/author_list.php">Auteurs</a></li>
                </ul>
            </div>
        </div>
    </nav>

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
                <?php for ($p = 1; $p < 6; $p++) { ?>
                <div class="thumb">
                    <h2>
                        <a href="#">
                            [Post #<?= $p ?> title]
                        </a>
                    </h2>
                    <p>
                        Le <em>[Post #<?= $p ?> date]</em>
                        par <strong>[Post #<?= $p ?> author]</strong>
                        dans <strong>[Post #<?= $p ?> category]</strong>
                    </p>
                    <p>[Post #<?= $p ?> summary]</p>
                    <p>
                        <a href="#" class="btn btn-sm btn-primary">
                            Lire la suite
                        </a>
                    </p>
                </div>
                <?php } ?>
            </div>
            <!-- End main column  -->

            <!-- Start side column -->
            <div class="col-md-3">
                <div class="side-block">
                    <!-- Categories menu -->
                    <ul class="nav nav-pills nav-stacked">
                        <?php for ($c = 1; $c < 5; $c++) { ?>
                        <li>
                            <a href="#">
                                [Category #<?= $c ?> title] (<?php echo rand(4, 10); ?>)
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="side-block">
                    <!-- Author menu -->
                    <ul class="nav nav-pills nav-stacked">
                        <?php for ($a = 1; $a < 5; $a++) { ?>
                        <li>
                            <a href="#">
                                [Author #<?= $a ?> full name] (<?php echo rand(4, 10); ?>)
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- End side column -->

        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
