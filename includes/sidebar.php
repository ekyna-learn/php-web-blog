<?php
$categories = $data_blog['categories'];
$authors = $data_blog['authors'];
?>

<!-- Start side column -->
<div class="col-md-3">
    <div class="side-block">
        <!-- Categories menu -->
        <ul class="nav nav-pills nav-stacked">
            <?php foreach($categories as $id => $category) { ?>
                <li>
                    <a href="<?= getCategoryUrl($category) ?>">
                        <?= $category['title'] ?> (<?php echo rand(4, 10); ?>)
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="side-block">
        <!-- Author menu -->
        <ul class="nav nav-pills nav-stacked">
            <?php foreach($authors as $author) { ?>
                <li>
                    <a href="<?= getAuthorUrl($author) ?>">
                        <?= $author['first_name'] . ' ' . $author['last_name'] ?> (<?php echo rand(4, 10); ?>)
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- End side column -->
