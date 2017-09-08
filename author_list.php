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
            <h1>Auteurs</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- Start main column -->
            <div class="col-md-9">
                <!-- Authors -->
                <?php for ($a = 1; $a < 5; $a++) { ?>
                <div class="thumb">
                    <h2>
                        <a href="#">
                            [Author #<?= $a ?> title]
                        </a>
                    </h2>
                    <p>
                        [Author #<?= $a ?> summary]
                    </p>
                    <p>
                        <a href="#" class="btn btn-sm btn-primary">
                            Tous les articles de &laquo;[Author #<?= $a ?> full name]&raquo;
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
